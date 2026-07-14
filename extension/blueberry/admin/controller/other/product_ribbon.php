<?php
namespace Opencart\Admin\Controller\Extension\Blueberry\Other;

/**
 * Class ProductRibbon
 *
 * "Product Ribbon" dropdown on the product General tab (Extensions >
 * Other). Injected via events - no core file is ever modified.
 *
 * @package Opencart\Admin\Controller\Extension\Blueberry\Other
 */
class ProductRibbon extends \Opencart\System\Engine\Controller {
	/**
	 * The ribbon option list shown in the dropdown. To add a new ribbon,
	 * add a line here (value => label) - nothing else needs to change.
	 *
	 * @var array<string, string>
	 */
	private array $options = [
		'Upcoming'        => 'Upcoming',
		'available'       => 'AVAILABLE',
		'Available (New)' => 'Available (New)',
		'5 Star Rating'   => '5 Star Rating',
		'Exchange Price'  => 'Exchange Price',
		'New Arrival'     => 'New Arrival',
		'Limited'         => 'Limited',
		'Stock Out'       => 'Stock Out',
		'Export Only'     => 'Export Only',
		'Stock Limited'   => 'Stock Limited'
	];

	/**
	 * Info page (Extensions > Other > Product Ribbon).
	 */
	public function index(): void {
		$this->load->language('extension/blueberry/other/product_ribbon');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/blueberry/other/product_ribbon', 'user_token=' . $this->session->data['user_token'])
		];

		$data['back'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=other');

		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/blueberry/other/product_ribbon', $data));
	}

	public function install(): void {
		$this->load->model('extension/blueberry/other/product_ribbon');

		$this->model_extension_blueberry_other_product_ribbon->install();
	}

	public function uninstall(): void {
		$this->load->model('extension/blueberry/other/product_ribbon');

		$this->model_extension_blueberry_other_product_ribbon->uninstall();
	}

	/**
	 * Event: admin/view/catalog/product_form/after
	 */
	public function injectForm(string &$route, array &$data, mixed &$output): void {
		if (!is_string($output)) {
			return;
		}

		$product_id = isset($this->request->get['product_id']) ? (int)$this->request->get['product_id'] : 0;

		$meta = [];

		if ($product_id) {
			$this->load->model('extension/blueberry/other/product_ribbon');

			$meta = $this->model_extension_blueberry_other_product_ribbon->getRibbon($product_id);
		}

		$js = <<<'BBJS'
<script>
(function () {
	function ready(fn) {
		if (document.readyState !== 'loading') { fn(); } else { document.addEventListener('DOMContentLoaded', fn); }
	}

	ready(function () {
		var options = __BB_OPTIONS__; // { value: label }
		var meta = __BB_META__;       // { language_id: current_value }

		function escapeHtml(s) {
			return String(s).replace(/[&<>"]/g, function (c) {
				return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;' }[c];
			});
		}

		function buildOptions(selected) {
			var html = '<option value="">-- Select Ribbon --</option>';

			for (var value in options) {
				if (!options.hasOwnProperty(value)) { continue; }

				html += '<option value="' + escapeHtml(value) + '"' + (value === selected ? ' selected' : '') + '>' + escapeHtml(options[value]) + '</option>';
			}

			return html;
		}

		var textareas = document.querySelectorAll('textarea[id^="input-description-"]');

		Array.prototype.forEach.call(textareas, function (textarea) {
			var languageId = textarea.id.replace('input-description-', '');

			if (!languageId || document.getElementById('input-product-ribbon-' + languageId)) { return; }

			var row = textarea.closest('.row');

			if (!row) { return; }

			var selected = meta[languageId] || '';

			var div = document.createElement('div');
			div.className = 'row mb-3';
			div.innerHTML =
				'<label class="col-sm-2 col-form-label" for="input-product-ribbon-' + languageId + '">Product Ribbon</label>' +
				'<div class="col-sm-10">' +
				'<select name="product_description[' + languageId + '][product_ribbon]" id="input-product-ribbon-' + languageId + '" class="form-select">' +
				buildOptions(selected) +
				'</select>' +
				'</div>';

			row.parentNode.insertBefore(div, row.nextSibling);
		});
	});
})();
</script>
BBJS;

		$js = str_replace('__BB_OPTIONS__', json_encode($this->options ?: new \stdClass()), $js);
		$js = str_replace('__BB_META__', json_encode($meta ?: new \stdClass()), $js);

		if (strpos($output, '</body>') !== false) {
			$output = str_replace('</body>', $js . '</body>', $output);
		} else {
			$output .= $js;
		}
	}

	/**
	 * Event: admin/model/catalog/product.editProduct/after
	 */
	public function saveEdit(string &$route, array &$args, mixed &$output): void {
		$product_id = isset($args[0]) ? (int)$args[0] : 0;

		$this->store($product_id);
	}

	/**
	 * Event: admin/model/catalog/product.addProduct/after
	 */
	public function saveAdd(string &$route, array &$args, mixed &$output): void {
		$product_id = (int)$output;

		$this->store($product_id);
	}

	protected function store(int $product_id): void {
		if (!$product_id) {
			return;
		}

		$this->load->model('extension/blueberry/other/product_ribbon');

		$this->model_extension_blueberry_other_product_ribbon->saveRibbon($product_id, $this->request->post);
	}
}
