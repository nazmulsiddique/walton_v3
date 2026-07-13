<?php
namespace Opencart\Admin\Controller\Extension\Blueberry\Other;
/**
 * Class CategoryMenu
 *
 * "Other" type extension, bundled inside the blueberry theme extension
 * folder. Adds two toggles ("Show in Top Menu" / "Show in Menu") to the
 * category edit form, and saves them, without modifying any core admin
 * file. Works entirely through the event system:
 *
 * - admin/view/catalog/category_form/after          -> form()         (inject fields)
 * - admin/model/catalog/category.addCategory/after   -> addCategory()  (save on create)
 * - admin/model/catalog/category.editCategory/after  -> editCategory() (save on edit)
 *
 * Independent from the blueberry THEME's own install/uninstall (Extensions >
 * Themes) - this shows up as its own item under Extensions > Other, so
 * switching themes does not remove this feature or its data.
 *
 * Can be called from $this->load->controller('extension/blueberry/other/category_menu');
 *
 * @package Opencart\Admin\Controller\Extension\Blueberry\Other
 */
class CategoryMenu extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * Minimal info page shown when clicking this item under Extensions > Other.
	 *
	 * @return void
	 */
	public function index(): void {
		$this->load->language('extension/blueberry/other/category_menu');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/blueberry/other/category_menu', 'user_token=' . $this->session->data['user_token'])
		];

		$data['back'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=other');

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/blueberry/other/category_menu', $data));
	}

	/**
	 * Install
	 *
	 * @return void
	 */
	public function install(): void {
		$this->load->model('extension/blueberry/other/category_menu');

		$this->model_extension_blueberry_other_category_menu->install();
	}

	/**
	 * Uninstall
	 *
	 * @return void
	 */
	public function uninstall(): void {
		$this->load->model('extension/blueberry/other/category_menu');

		$this->model_extension_blueberry_other_category_menu->uninstall();
	}

	/**
	 * Form
	 *
	 * Event: admin/view/catalog/category_form/after
	 * Injects the two switch fields right before the Status field, using the
	 * saved values for the category currently being edited (if any).
	 *
	 * @param string               $route
	 * @param array<string, mixed> $data
	 * @param string               $output
	 *
	 * @return void
	 */
	public function form(string &$route, array &$data, string &$output): void {
		$this->load->language('extension/blueberry/other/category_menu');

		if (!empty($this->request->get['category_id'])) {
			$this->load->model('extension/blueberry/other/category_menu');

			$category_menu_info = $this->model_extension_blueberry_other_category_menu->getCategoryMenu((int)$this->request->get['category_id']);
		} else {
			$category_menu_info = [];
		}

		$top_menu_status = !empty($category_menu_info['top_menu_status']);
		$menu_status = !empty($category_menu_info['menu_status']);

		$html = '';
		$html .= '<div class="row mb-3">';
		$html .= '<label class="col-sm-2 col-form-label">' . $this->language->get('entry_top_menu') . '</label>';
		$html .= '<div class="col-sm-10"><div class="form-check form-switch form-switch-lg">';
		$html .= '<input type="hidden" name="top_menu_status" value="0"/>';
		$html .= '<input type="checkbox" name="top_menu_status" value="1" id="input-top-menu-status" class="form-check-input"' . ($top_menu_status ? ' checked' : '') . '/>';
		$html .= '</div></div>';
		$html .= '</div>';
		$html .= '<div class="row mb-3">';
		$html .= '<label class="col-sm-2 col-form-label">' . $this->language->get('entry_menu') . '</label>';
		$html .= '<div class="col-sm-10"><div class="form-check form-switch form-switch-lg">';
		$html .= '<input type="hidden" name="menu_status" value="0"/>';
		$html .= '<input type="checkbox" name="menu_status" value="1" id="input-menu-status" class="form-check-input"' . ($menu_status ? ' checked' : '') . '/>';
		$html .= '</div></div>';
		$html .= '</div>';

		// Insert right before the Status field's row, identified by the stable
		// (language independent) markup of its hidden input.
		$anchor = 'name="status" value="0"';
		$anchor_pos = strpos($output, $anchor);

		if ($anchor_pos !== false) {
			$row_pos = strrpos(substr($output, 0, $anchor_pos), '<div class="row mb-3">');

			if ($row_pos !== false) {
				$output = substr($output, 0, $row_pos) . $html . substr($output, $row_pos);
			}
		}
	}

	/**
	 * Add Category
	 *
	 * Event: admin/model/catalog/category.addCategory/after
	 *
	 * @param string       $route
	 * @param array<mixed> $args
	 * @param mixed        $output
	 *
	 * @return void
	 */
	public function addCategory(string &$route, array &$args, mixed &$output): void {
		$data = $args[0] ?? [];
		$category_id = (int)$output;

		if ($category_id) {
			$this->load->model('extension/blueberry/other/category_menu');

			$this->model_extension_blueberry_other_category_menu->saveCategoryMenu($category_id, $data);
		}
	}

	/**
	 * Edit Category
	 *
	 * Event: admin/model/catalog/category.editCategory/after
	 *
	 * @param string       $route
	 * @param array<mixed> $args
	 * @param mixed        $output
	 *
	 * @return void
	 */
	public function editCategory(string &$route, array &$args, mixed &$output): void {
		$category_id = (int)($args[0] ?? 0);
		$data = $args[1] ?? [];

		if ($category_id) {
			$this->load->model('extension/blueberry/other/category_menu');

			$this->model_extension_blueberry_other_category_menu->saveCategoryMenu($category_id, $data);
		}
	}
}
