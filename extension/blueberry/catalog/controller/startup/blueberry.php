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
			'product/thumb_related'
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