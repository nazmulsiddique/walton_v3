<?php
namespace Opencart\Catalog\Controller\Extension\Blueberry\Startup;
class Blueberry extends \Opencart\System\Engine\Controller {
	public function index(): void {
		if ($this->config->get('config_theme') == 'blueberry' && $this->config->get('theme_blueberry_status')) {
			// Add event via code instead of DB
			// Could also just set view/common/header/before
			$this->event->register('view/*/before', new \Opencart\System\Engine\Action('extension/blueberry/startup/blueberry.event'));
		}
	}

	public function event(string &$route, array &$args, mixed &$output): void {
		// $override = ['common/header'];
		$override = ['common/header', 'common/footer'];

		if (in_array($route, $override)) {
			$route = 'extension/blueberry/' . $route;
		}
	}
}