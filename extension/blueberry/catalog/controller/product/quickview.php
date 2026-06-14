<?php
namespace Opencart\Catalog\Controller\Extension\Blueberry\Product;

class Quickview extends \Opencart\System\Engine\Controller {

    public function index(): void {

        $this->load->model('catalog/product');
        $this->load->model('tool/image');

        $product_id = (int)($this->request->get['product_id'] ?? 0);

        if (!$product_id) {
            return;
        }

        $product_info = $this->model_catalog_product->getProduct($product_id);

        if (!$product_info) {
            return;
        }

        $currency = $this->session->data['currency'] ?? $this->config->get('config_currency');

        $data = [];

        $data['name'] = $product_info['name'];

        $data['price'] = $this->currency->format(
            $product_info['price'],
            $currency
        );

        $data['thumb'] = $this->model_tool_image->resize(
            $product_info['image'],
            600,
            600
        );

        $this->response->addHeader('Content-Type: text/html; charset=utf-8');

        $this->response->setOutput(
            $this->load->view(
                'extension/blueberry/product/quickview',
                $data
            )
        );
    }
}