<?php
namespace Opencart\Admin\Model\Extension\Blueberry\Other;
/**
 * Class CategoryMenu
 *
 * Handles install/uninstall (schema + event registration) and the actual
 * read/write of the two extra category fields ("top_menu_status",
 * "menu_status") without ever touching core admin files.
 *
 * Can be loaded using $this->load->model('extension/blueberry/other/category_menu');
 *
 * @package Opencart\Admin\Model\Extension\Blueberry\Other
 */
class CategoryMenu extends \Opencart\System\Engine\Model {
	/**
	 * Install
	 *
	 * @return void
	 */
	public function install(): void {
		// Schema: add the two columns if they don't already exist (safe to re-run)
		$columns = $this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "category`");

		$existing = array_column($columns->rows, 'Field');

		if (!in_array('top_menu_status', $existing)) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "category` ADD `top_menu_status` TINYINT(1) NOT NULL DEFAULT '0' AFTER `sort_order`");
		}

		if (!in_array('menu_status', $existing)) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "category` ADD `menu_status` TINYINT(1) NOT NULL DEFAULT '0' AFTER `top_menu_status`");
		}

		// Events
		$this->load->model('setting/event');

		$this->model_setting_event->deleteEventByCode('category_menu_form');
		$this->model_setting_event->deleteEventByCode('category_menu_add');
		$this->model_setting_event->deleteEventByCode('category_menu_edit');

		$this->model_setting_event->addEvent([
			'code'        => 'category_menu_form',
			'description' => 'Injects the "Show in Top Menu" / "Show in Menu" switches into the category form.',
			'trigger'     => 'admin/view/catalog/category_form/after',
			'action'      => 'extension/blueberry/other/category_menu.form',
			'status'      => 1,
			'sort_order'  => 0
		]);

		$this->model_setting_event->addEvent([
			'code'        => 'category_menu_add',
			'description' => 'Saves the "Show in Top Menu" / "Show in Menu" values when a category is added.',
			'trigger'     => 'admin/model/catalog/category.addCategory/after',
			'action'      => 'extension/blueberry/other/category_menu.addCategory',
			'status'      => 1,
			'sort_order'  => 0
		]);

		$this->model_setting_event->addEvent([
			'code'        => 'category_menu_edit',
			'description' => 'Saves the "Show in Top Menu" / "Show in Menu" values when a category is edited.',
			'trigger'     => 'admin/model/catalog/category.editCategory/after',
			'action'      => 'extension/blueberry/other/category_menu.editCategory',
			'status'      => 1,
			'sort_order'  => 0
		]);

		// Make sure the "blueberry" extension folder is registered for
		// persistent admin-side autoloading (controllers/models/views/language
		// under extension/blueberry/admin/*) on every future request - not
		// just this one. This is shared infrastructure for the whole
		// blueberry extension folder (theme settings page included), so it
		// is only added here if missing, and never removed on uninstall()
		// below (removing it could break the theme's own admin pages).
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
		// Events
		$this->load->model('setting/event');

		$this->model_setting_event->deleteEventByCode('category_menu_form');
		$this->model_setting_event->deleteEventByCode('category_menu_add');
		$this->model_setting_event->deleteEventByCode('category_menu_edit');

		// Schema: drop the two columns (data loss expected/confirmed)
		$columns = $this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "category`");

		$existing = array_column($columns->rows, 'Field');

		if (in_array('menu_status', $existing)) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "category` DROP `menu_status`");
		}

		if (in_array('top_menu_status', $existing)) {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "category` DROP `top_menu_status`");
		}

		// Note: we deliberately do NOT remove the 'blueberry' extension_install
		// row here - it is shared infrastructure for the whole blueberry
		// extension (theme settings page etc.), not specific to this feature.
	}

	/**
	 * Get Category Menu
	 *
	 * @param int $category_id
	 *
	 * @return array<string, mixed>
	 */
	public function getCategoryMenu(int $category_id): array {
		$query = $this->db->query("SELECT `top_menu_status`, `menu_status` FROM `" . DB_PREFIX . "category` WHERE `category_id` = '" . (int)$category_id . "'");

		return $query->row;
	}

	/**
	 * Save Category Menu
	 *
	 * @param int                  $category_id
	 * @param array<string, mixed> $data
	 *
	 * @return void
	 */
	public function saveCategoryMenu(int $category_id, array $data): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "category` SET `top_menu_status` = '" . (bool)($data['top_menu_status'] ?? 0) . "', `menu_status` = '" . (bool)($data['menu_status'] ?? 0) . "' WHERE `category_id` = '" . (int)$category_id . "'");
	}
}
