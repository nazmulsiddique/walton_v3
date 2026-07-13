<?php
namespace Opencart\Catalog\Controller\Extension\Blueberry\Other;

/**
 * Class AttributeSort (storefront)
 *
 * Reorders the grouped attribute output of the core product model:
 *   - groups   -> by the per-product order stored in blueberry_attribute_group_sort
 *   - elements -> by product_attribute.sort_order (within each group)
 *
 * Event: catalog/model/catalog/product.getAttributes/after
 *
 * @package Opencart\Catalog\Controller\Extension\Blueberry\Other
 */
class AttributeSort extends \Opencart\System\Engine\Controller {
	public function frontendSort(string &$route, array &$args, mixed &$output): void {
		$product_id = isset($args[0]) ? (int)$args[0] : 0;

		if (!$product_id || empty($output) || !is_array($output)) {
			return;
		}

		// Element order within a group: attribute_id => sort_order
		$element_sort = [];

		$query = $this->db->query("SELECT `attribute_id`, MIN(`sort_order`) AS `sort_order` FROM `" . DB_PREFIX . "product_attribute` WHERE `product_id` = '" . (int)$product_id . "' GROUP BY `attribute_id`");

		foreach ($query->rows as $row) {
			$element_sort[(int)$row['attribute_id']] = (int)$row['sort_order'];
		}

		// Group order: attribute_group_id => sort_order (table may not exist if
		// the extension was never installed - fail safe and leave order as is).
		$group_sort = [];

		try {
			$group_query = $this->db->query("SELECT `attribute_group_id`, `sort_order` FROM `" . DB_PREFIX . "blueberry_attribute_group_sort` WHERE `product_id` = '" . (int)$product_id . "'");

			foreach ($group_query->rows as $row) {
				$group_sort[(int)$row['attribute_group_id']] = (int)$row['sort_order'];
			}
		} catch (\Throwable $e) {
			return;
		}

		// Nothing customised at all -> keep the default order.
		if (!array_filter($element_sort) && !$group_sort) {
			return;
		}

		// Sort elements within each group and tag each group with its weight.
		$index = 0;

		foreach ($output as &$group) {
			if (!empty($group['attribute']) && is_array($group['attribute'])) {
				usort($group['attribute'], function ($a, $b) use ($element_sort) {
					$sa = isset($element_sort[$a['attribute_id']]) ? $element_sort[$a['attribute_id']] : 0;
					$sb = isset($element_sort[$b['attribute_id']]) ? $element_sort[$b['attribute_id']] : 0;

					return $sa <=> $sb;
				});
			}

			$gid = isset($group['attribute_group_id']) ? (int)$group['attribute_group_id'] : 0;

			// Groups without a stored order keep their core position (after the ordered ones).
			$group['bb_weight'] = isset($group_sort[$gid]) ? $group_sort[$gid] : (100000 + $index);

			$index++;
		}

		unset($group);

		// PHP 8 usort is stable, so equal weights keep their relative order.
		usort($output, function ($a, $b) {
			return ($a['bb_weight'] ?? 0) <=> ($b['bb_weight'] ?? 0);
		});

		foreach ($output as &$group) {
			unset($group['bb_weight']);
		}

		unset($group);
	}
}
