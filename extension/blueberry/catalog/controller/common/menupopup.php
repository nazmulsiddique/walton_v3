<?php
namespace Opencart\Catalog\Controller\Extension\Blueberry\Common;
/**
 * Class Menu
 *
 * Can be called from $this->load->controller('common/menu');
 *
 * @package Opencart\Catalog\Controller\Common
 */
class Menupopup extends \Opencart\System\Engine\Controller {
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

			// Thumb generate koro
			if ($category['image']) {
				$thumb = $this->model_tool_image->resize($category['image'], 80, 80);
			} else {
				$thumb = $this->model_tool_image->resize('no_image.png', 80, 80);
			}

			// Level 1
			$data['categories'][] = [
				'category_id' => $category['category_id'],
				'name'        => $category['name'],
        		'thumb'       => $thumb,
				'children' => $children_data,
				'href'     => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $category['category_id'])
			] + $category;
		}

		return $this->load->view('extension/blueberry/common/menu_popup', $data);
	}
}
