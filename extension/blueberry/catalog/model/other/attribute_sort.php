<?php
namespace Opencart\Catalog\Model\Extension\Blueberry\Other;

/**
 * Class AttributeSort (storefront model)
 *
 * Provides the curated "short description" attribute list for the single
 * product page: only attributes with a non-NULL
 * product_attribute.short_description_sort_order are returned, ordered by
 * that value ascending. Independent of, and unaffected by, the general
 * attribute_groups sort_order feature.
 *
 * @package Opencart\Catalog\Model\Extension\Blueberry\Other
 */
class AttributeSort extends \Opencart\System\Engine\Model {
	/**
	 * @param int $product_id
	 *
	 * @return array<int, array<string, string>>
	 */
	public function getShortDescriptionAttributes(int $product_id): array {
		$language_id = (int)$this->config->get('config_language_id');

		$query = $this->db->query("SELECT `ad`.`name`, `pa`.`text` FROM `" . DB_PREFIX . "product_attribute` `pa` LEFT JOIN `" . DB_PREFIX . "attribute_description` `ad` ON (`ad`.`attribute_id` = `pa`.`attribute_id` AND `ad`.`language_id` = '" . (int)$language_id . "') WHERE `pa`.`product_id` = '" . (int)$product_id . "' AND `pa`.`language_id` = '" . (int)$language_id . "' AND `pa`.`short_description_sort_order` IS NOT NULL ORDER BY `pa`.`short_description_sort_order` ASC");

		return $query->rows;
	}
}
