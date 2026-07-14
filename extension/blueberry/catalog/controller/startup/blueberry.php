<?php
namespace Opencart\Catalog\Controller\Extension\Blueberry\Startup;
class Blueberry extends \Opencart\System\Engine\Controller {
	public function index(): void {
		if ($this->config->get('config_theme') == 'blueberry' && $this->config->get('theme_blueberry_status')) {
			// Add event via code instead of DB
			// Could also just set view/common/header/before
			// VIEW override
			$this->event->register('view/*/before', new \Opencart\System\Engine\Action('extension/blueberry/startup/blueberry.event'));

			// CONTROLLER override
            $this->event->register(
				'controller/*/before',
				new \Opencart\System\Engine\Action('extension/blueberry/startup/blueberry.controller')
			);
		}
	}

	public function event(string &$route, array &$args, mixed &$output): void {

		if ($route == 'common/header') {
			$args['menupopup'] = $this->load->controller('extension/blueberry/common/menupopup');
		}

		if ($route == 'common/menu' && !empty($args['categories'])) {
			$args['categories'] = array_values(array_filter($args['categories'], function ($category) {
				return !empty($category['menu_status']);
			}));
		}

		if ($route == 'extension/opencart/module/filter' && !empty($args['filter_groups'])) {
			$price_min = (isset($this->request->get['price_min']) && is_numeric($this->request->get['price_min'])) ? (string)(float)$this->request->get['price_min'] : '';
			$price_max = (isset($this->request->get['price_max']) && is_numeric($this->request->get['price_max'])) ? (string)(float)$this->request->get['price_max'] : '';

			$this->load->model('extension/blueberry/other/price_filter');

			$category_id = 0;

			if (isset($this->request->get['path'])) {
				$parts = explode('_', (string)$this->request->get['path']);
				$category_id = (int)end($parts);
			}

			$new_groups = [];

			foreach ($args['filter_groups'] as $group) {
				$new_filters = [];

				foreach ($group['filter'] as $filter) {
					$count = $this->model_extension_blueberry_other_price_filter->getTotalProducts([
						'filter_category_id' => $category_id,
						'filter_filter'      => $filter['filter_id'],
						'filter_price_min'   => $price_min,
						'filter_price_max'   => $price_max
					]);

					if ($count > 0) {
						$base_name = preg_replace('/\s\(\d+\)$/', '', (string)$filter['name']);

						$new_filters[] = [
							'filter_id' => $filter['filter_id'],
							'name'      => $this->config->get('config_product_count') ? ($base_name . ' (' . $count . ')') : $base_name
						];
					}
				}

				if ($new_filters) {
					$new_groups[] = [
						'filter_group_id' => $group['filter_group_id'],
						'name'            => $group['name'],
						'filter'          => $new_filters
					];
				}
			}

			$args['filter_groups'] = $new_groups;
		}

		if ($route == 'extension/opencart/module/category' && !empty($args['categories'])) {
			$price_min = (isset($this->request->get['price_min']) && is_numeric($this->request->get['price_min'])) ? (string)(float)$this->request->get['price_min'] : '';
			$price_max = (isset($this->request->get['price_max']) && is_numeric($this->request->get['price_max'])) ? (string)(float)$this->request->get['price_max'] : '';

			$this->load->model('extension/blueberry/other/price_filter');

			foreach ($args['categories'] as &$category) {
				if (empty($category['children'])) {
					continue;
				}

				$new_children = [];

				foreach ($category['children'] as $child) {
					$count = $this->model_extension_blueberry_other_price_filter->getTotalProducts([
						'filter_category_id'  => $child['category_id'],
						'filter_sub_category' => true,
						'filter_price_min'    => $price_min,
						'filter_price_max'    => $price_max
					]);

					if ($count > 0) {
						$base_name = preg_replace('/\s\(\d+\)$/', '', (string)$child['name']);

						$new_children[] = [
							'category_id' => $child['category_id'],
							'name'        => $this->config->get('config_product_count') ? ($base_name . ' (' . $count . ')') : $base_name,
							'href'        => $child['href']
						];
					}
				}

				$category['children'] = $new_children;
			}

			unset($category);
		}
		
		if (in_array($route, [
			'common/header',
			'common/footer',
			'common/home',
			'common/pagination',
			'common/search',
			'common/menu',
			'common/menu_popup',
			'information/information',
			'product/category',
			'product/product',
			'product/thumb',
    		'product/product_quickview',
    		'product/compare',
			'product/search',
			'product/related',
			'product/thumb_related',
			'cms/blog',
			'cms/blog_info'
			])) {
			$route = 'extension/blueberry/' . $route;
		}

		$route = str_replace(
			'extension/opencart/',
			'extension/blueberry/',
			$route
		);
	}

	public function controller(string &$route, array &$args): void {

		switch ($route) {
			case 'product/category':
				$route = 'extension/blueberry/product/category';
				break;

			case 'product/product':
				$route = 'extension/blueberry/product/product';
				break;

			// case 'common/menupopup':
			// 	$route = 'extension/blueberry/common/menupopup';
			// 	break;

			// case 'common/header':
			// $route = 'extension/blueberry/common/header';
			// break;

		}
	}
}