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

		if (in_array($route, [
			'common/header',
			'common/footer',
			'common/home',
			'common/pagination',
			'common/search',
			'information/information',
			'product/category',
			'product/product',
			'product/thumb',
    		'product/quickview',
    		'product/compare',
			'product/search'
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

    if ($route == 'product/category') {
        $route = 'extension/blueberry/product/category';
    }

    if ($route == 'product/quickview') {
        $route = 'extension/blueberry/product/quickview';
    }
}



	


}