<?php
namespace Opencart\Catalog\Controller\Extension\Blueberry\Common;
/**
 * Class Topmenu
 *
 * Alternate "box style" category menu used inside the category sidebar popup
 * (triggered by the .bb-category-toggle button). Renders the same category
 * data as common/menu, but as image tab-buttons with matching sub-category
 * tab-content, instead of a plain list.
 *
 * Can be called from $this->load->controller('common/topmenu');
 *
 * @package Opencart\Catalog\Controller\Common
 */
class Topmenu extends \Opencart\System\Engine\Controller {
	/**
	 * Index
	 *
	 * @return string
	 */
	public function index(): string {
		$this->load->language('common/menu');

		// Category
		$this->load->model('catalog/category');

		// Product
		$this->load->model('catalog/product');

		// Image
		$this->load->model('tool/image');

		$data['categories'] = [];

		$categories = $this->model_catalog_category->getCategories(0);

		foreach ($categories as $category) {
			// Only show this category in the top menu if the admin enabled "Show in Top Menu"
			if (empty($category['top_menu_status'])) {
				continue;
			}

			// Level 2
			$children_data = [];

			$children = $this->model_catalog_category->getCategories($category['category_id']);

			foreach ($children as $child) {
				// Same rule applies to sub-categories
				if (empty($child['top_menu_status'])) {
					continue;
				}

				$filter_data = [
					'filter_category_id'  => $child['category_id'],
					'filter_sub_category' => true
				];

				$children_data[] = [
					'name' => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
					'href' => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $category['category_id'] . '_' . $child['category_id'])
				];
			}

			// Category thumbnail (empty string when missing, template shows a placeholder icon)
			if (!empty($category['image']) && is_file(DIR_IMAGE . html_entity_decode($category['image'], ENT_QUOTES, 'UTF-8'))) {
				$thumb = $this->model_tool_image->resize($category['image'], $this->config->get('config_image_category_width'), $this->config->get('config_image_category_height'));
			} else {
				$thumb = '';
			}

			// Level 1
			$data['categories'][] = [
				'children' => $children_data,
				'thumb'    => $thumb,
				'href'     => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $category['category_id'])
			] + $category;
		}

		return $this->load->view('extension/blueberry/common/topmenu', $data);
	}
}
