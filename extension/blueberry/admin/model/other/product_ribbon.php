<?php
namespace Opencart\Admin\Model\Extension\Blueberry\Other;

/**
 * Class ProductRibbon
 *
 * Adds a "Product Ribbon" dropdown (per language) to the product General
 * tab, bundled as an "Other" extension (Extensions > Other) inside the
 * blueberry theme folder - no core file is ever touched.
 *
 * Storage:
 *   - <prefix>product_description.product_ribbon (nullable, kept on uninstall)
 *
 * Events:
 *   - admin/view/catalog/product_form/after         -> injectForm (adds the dropdown)
 *   - admin/model/catalog/product.addProduct/after   -> saveAdd
 *   - admin/model/catalog/product.editProduct/after  -> saveEdit
 *
 * @package Opencart\Admin\Model\Extension\Blueberry\Other
 */
class ProductRibbon extends \Opencart\System\Engine\Model {
	/**
	 * Install
	 *
	 * @return void
	 */
	public function install(): void {
		// Schema: add the column if it doesn't already exist (safe to re-run).
		$columns = $this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "product_description`");

		$existing = array_column($columns->rows, 'Field');

		if (!in_array('product_ribbon', $existing)) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "product_description` ADD `product_ribbon` VARCHAR(64) NULL DEFAULT NULL AFTER `description`");
		}

		// Events
		$this->load->model('setting/event');

		$this->model_setting_event->deleteEventByCode('product_ribbon_form');
		$this->model_setting_event->deleteEventByCode('product_ribbon_add');
		$this->model_setting_event->deleteEventByCode('product_ribbon_edit');

		$this->model_setting_event->addEvent([
			'code'        => 'product_ribbon_form',
			'description' => 'Injects the "Product Ribbon" dropdown into the product form (General tab, after Description).',
			'trigger'     => 'admin/view/catalog/product_form/after',
			'action'      => 'extension/blueberry/other/product_ribbon.injectForm',
			'status'      => 1,
			'sort_order'  => 0
		]);

		$this->model_setting_event->addEvent([
			'code'        => 'product_ribbon_add',
			'description' => 'Saves the Product Ribbon value when a product is added.',
			'trigger'     => 'admin/model/catalog/product.addProduct/after',
			'action'      => 'extension/blueberry/other/product_ribbon.saveAdd',
			'status'      => 1,
			'sort_order'  => 0
		]);

		$this->model_setting_event->addEvent([
			'code'        => 'product_ribbon_edit',
			'description' => 'Saves the Product Ribbon value when a product is edited.',
			'trigger'     => 'admin/model/catalog/product.editProduct/after',
			'action'      => 'extension/blueberry/other/product_ribbon.saveEdit',
			'status'      => 1,
			'sort_order'  => 0
		]);

		// Shared 'blueberry' admin autoload registration (see attribute_sort /
		// category_menu models - only added if missing, never removed).
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

		$this->model_setting_event->deleteEventByCode('product_ribbon_form');
		$this->model_setting_event->deleteEventByCode('product_ribbon_add');
		$this->model_setting_event->deleteEventByCode('product_ribbon_edit');

		// Note: product_description.product_ribbon is intentionally kept on
		// uninstall (per explicit requirement) so existing data is never lost.
	}

	/**
	 * Current ribbon value per language for a product.
	 *
	 * @param int $product_id
	 *
	 * @return array<string, string> language_id => product_ribbon
	 */
	public function getRibbon(int $product_id): array {
		$query = $this->db->query("SELECT `language_id`, `product_ribbon` FROM `" . DB_PREFIX . "product_description` WHERE `product_id` = '" . (int)$product_id . "'");

		$data = [];

		foreach ($query->rows as $row) {
			$data[(string)$row['language_id']] = (string)$row['product_ribbon'];
		}

		return $data;
	}

	/**
	 * Persist the ribbon value from a product-save POST.
	 *
	 * @param int                  $product_id
	 * @param array<string, mixed> $post
	 *
	 * @return void
	 */
	public function saveRibbon(int $product_id, array $post): void {
		if (!$product_id || empty($post['product_description'])) {
			return;
		}

		foreach ($post['product_description'] as $language_id => $value) {
			$language_id = (int)$language_id;

			if (!$language_id) {
				continue;
			}

			$ribbon = isset($value['product_ribbon']) ? (string)$value['product_ribbon'] : '';

			$this->db->query("UPDATE `" . DB_PREFIX . "product_description` SET `product_ribbon` = '" . $this->db->escape($ribbon) . "' WHERE `product_id` = '" . (int)$product_id . "' AND `language_id` = '" . (int)$language_id . "'");
		}
	}
}
