<?php
namespace Opencart\Admin\Model\Extension\Blueberry\Other;

/**
 * Class AttributeSort
 *
 * Per-product attribute sort order, bundled inside the blueberry theme
 * folder as an "Other" extension (Extensions > Other). Handles
 * install/uninstall (schema + event registration) and the read/write of
 * the ordering data, without ever touching a core file.
 *
 * Storage:
 *   - <prefix>product_attribute.sort_order          : element order WITHIN a group (1..N per group)
 *   - <prefix>blueberry_attribute_group_sort        : order of the groups themselves, per product
 *
 * Events:
 *   - admin/view/catalog/product_form/after            -> injectForm  (grouped UI + group drag)
 *   - admin/model/catalog/product.addProduct/after      -> saveAdd
 *   - admin/model/catalog/product.editProduct/after     -> saveEdit
 *   - catalog/model/catalog/product.getAttributes/after -> frontendSort
 *
 * @package Opencart\Admin\Model\Extension\Blueberry\Other
 */
class AttributeSort extends \Opencart\System\Engine\Model {
	/**
	 * Install
	 *
	 * @return void
	 */
	public function install(): void {
		// 1. Element order column on product_attribute (safe to re-run).
		$columns = $this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "product_attribute`");

		$existing = array_column($columns->rows, 'Field');

		if (!in_array('sort_order', $existing)) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "product_attribute` ADD `sort_order` INT(3) NOT NULL DEFAULT '0' AFTER `text`");
		}

		// Independent field: which attributes show in the short-description
		// block on the product page, and in what order. NULL = hidden there.
		if (!in_array('short_description_sort_order', $existing)) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "product_attribute` ADD `short_description_sort_order` INT(3) NULL DEFAULT NULL AFTER `sort_order`");
		}

		// 2. Per-product group ordering table.
		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "blueberry_attribute_group_sort` (
			`product_id` INT(11) NOT NULL,
			`attribute_group_id` INT(11) NOT NULL,
			`sort_order` INT(3) NOT NULL DEFAULT '0',
			PRIMARY KEY (`product_id`, `attribute_group_id`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci");

		// 3. Events (remove any previous versions first, incl. the old prototype).
		$this->load->model('setting/event');

		foreach (['blueberry_attribute_sort', 'attribute_sort_form', 'attribute_sort_add', 'attribute_sort_edit', 'attribute_sort_frontend'] as $code) {
			$this->model_setting_event->deleteEventByCode($code);
		}

		$this->model_setting_event->addEvent([
			'code'        => 'attribute_sort_form',
			'description' => 'Attribute sort - inject grouped sort UI into the product form.',
			'trigger'     => 'admin/view/catalog/product_form/after',
			'action'      => 'extension/blueberry/other/attribute_sort.injectForm',
			'status'      => 1,
			'sort_order'  => 0
		]);

		$this->model_setting_event->addEvent([
			'code'        => 'attribute_sort_add',
			'description' => 'Attribute sort - save ordering when a product is added.',
			'trigger'     => 'admin/model/catalog/product.addProduct/after',
			'action'      => 'extension/blueberry/other/attribute_sort.saveAdd',
			'status'      => 1,
			'sort_order'  => 0
		]);

		$this->model_setting_event->addEvent([
			'code'        => 'attribute_sort_edit',
			'description' => 'Attribute sort - save ordering when a product is edited.',
			'trigger'     => 'admin/model/catalog/product.editProduct/after',
			'action'      => 'extension/blueberry/other/attribute_sort.saveEdit',
			'status'      => 1,
			'sort_order'  => 0
		]);

		$this->model_setting_event->addEvent([
			'code'        => 'attribute_sort_frontend',
			'description' => 'Attribute sort - order attributes/groups on the storefront.',
			'trigger'     => 'catalog/model/catalog/product.getAttributes/after',
			'action'      => 'extension/blueberry/other/attribute_sort.frontendSort',
			'status'      => 1,
			'sort_order'  => 0
		]);

		// 4. Register the shared 'blueberry' admin autoload entry if missing.
		$this->load->model('setting/extension');

		if (!$this->model_setting_extension->getInstallByCode('blueberry')) {
			$this->model_setting_extension->addInstall([
				'extension_id'          => 0,
				'extension_download_id' => 0,
				'name'                  => 'Blueberry',
				'description'           => 'Blueberry theme extension (admin-side autoload registration).',
				'code'                  => 'blueberry',
				'version'               => '1.0',
				'author'                => 'Blueberry',
				'link'                  => '',
				'status'                => 1
			]);
		}
	}

	/**
	 * Uninstall
	 *
	 * @return void
	 */
	public function uninstall(): void {
		$this->load->model('setting/event');

		foreach (['blueberry_attribute_sort', 'attribute_sort_form', 'attribute_sort_add', 'attribute_sort_edit', 'attribute_sort_frontend'] as $code) {
			$this->model_setting_event->deleteEventByCode($code);
		}

		// Drop the group ordering table (per-product group order data is lost).
		$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "blueberry_attribute_group_sort`");

		// Note: the product_attribute.sort_order column is intentionally kept
		// (it is a harmless standard-looking column and dropping it would lose
		// element ordering). Remove it manually if you really want it gone.
	}

	/**
	 * Attribute meta for a product: attribute_id => {gid, gname, so}
	 *
	 * @param int $product_id
	 *
	 * @return array<string, array<string, mixed>>
	 */
	public function getAttributeMeta(int $product_id): array {
		$language_id = (int)$this->config->get('config_language_id');

		$query = $this->db->query("SELECT `pa`.`attribute_id`, MIN(`pa`.`sort_order`) AS `sort_order`, MIN(`pa`.`short_description_sort_order`) AS `short_description_sort_order`, `a`.`attribute_group_id`, `agd`.`name` FROM `" . DB_PREFIX . "product_attribute` `pa` LEFT JOIN `" . DB_PREFIX . "attribute` `a` ON (`a`.`attribute_id` = `pa`.`attribute_id`) LEFT JOIN `" . DB_PREFIX . "attribute_group_description` `agd` ON (`agd`.`attribute_group_id` = `a`.`attribute_group_id` AND `agd`.`language_id` = '" . (int)$language_id . "') WHERE `pa`.`product_id` = '" . (int)$product_id . "' GROUP BY `pa`.`attribute_id`");

		$meta = [];

		foreach ($query->rows as $row) {
			$meta[(string)$row['attribute_id']] = [
				'gid'   => (int)$row['attribute_group_id'],
				'gname' => (string)$row['name'],
				'so'    => (int)$row['sort_order'],
				'sdso'  => $row['short_description_sort_order'] !== null ? (int)$row['short_description_sort_order'] : null
			];
		}

		return $meta;
	}

	/**
	 * Group order for a product: attribute_group_id => sort_order
	 *
	 * @param int $product_id
	 *
	 * @return array<string, int>
	 */
	public function getGroupSort(int $product_id): array {
		$query = $this->db->query("SELECT `attribute_group_id`, `sort_order` FROM `" . DB_PREFIX . "blueberry_attribute_group_sort` WHERE `product_id` = '" . (int)$product_id . "'");

		$data = [];

		foreach ($query->rows as $row) {
			$data[(string)$row['attribute_group_id']] = (int)$row['sort_order'];
		}

		return $data;
	}

	/**
	 * Persist ordering from a product-save POST.
	 *
	 * @param int                  $product_id
	 * @param array<string, mixed> $post
	 *
	 * @return void
	 */
	public function saveSort(int $product_id, array $post): void {
		if (!$product_id) {
			return;
		}

		// Element order within each group.
		if (!empty($post['product_attribute'])) {
			foreach ($post['product_attribute'] as $product_attribute) {
				if (empty($product_attribute['attribute_id'])) {
					continue;
				}

				$sort_order = isset($product_attribute['sort_order']) ? (int)$product_attribute['sort_order'] : 0;

				// Blank / non-numeric => NULL (hidden from the short-description block).
				$sdso_raw = $product_attribute['short_description_sort_order'] ?? '';
				$sdso_raw = is_string($sdso_raw) ? trim($sdso_raw) : $sdso_raw;

				$short_description_sort_order = ($sdso_raw === '' || $sdso_raw === null) ? 'NULL' : "'" . (int)$sdso_raw . "'";

				$this->db->query("UPDATE `" . DB_PREFIX . "product_attribute` SET `sort_order` = '" . (int)$sort_order . "', `short_description_sort_order` = " . $short_description_sort_order . " WHERE `product_id` = '" . (int)$product_id . "' AND `attribute_id` = '" . (int)$product_attribute['attribute_id'] . "'");
			}
		}

		// Group order.
		$this->db->query("DELETE FROM `" . DB_PREFIX . "blueberry_attribute_group_sort` WHERE `product_id` = '" . (int)$product_id . "'");

		if (!empty($post['bb_group_sort']) && is_array($post['bb_group_sort'])) {
			foreach ($post['bb_group_sort'] as $attribute_group_id => $sort_order) {
				$attribute_group_id = (int)$attribute_group_id;

				if (!$attribute_group_id) {
					continue;
				}

				$this->db->query("INSERT INTO `" . DB_PREFIX . "blueberry_attribute_group_sort` SET `product_id` = '" . (int)$product_id . "', `attribute_group_id` = '" . (int)$attribute_group_id . "', `sort_order` = '" . (int)$sort_order . "'");
			}
		}
	}
}
