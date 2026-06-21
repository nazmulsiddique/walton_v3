<?php
namespace Opencart\Catalog\Controller\Extension\Blueberry\Product;

class Quickview extends \Opencart\System\Engine\Controller {

    public function index(): void {
        $this->load->model('catalog/product');
        $this->load->model('tool/image');

        $product_id = (int)$this->request->get['product_id'];

        $product_info = $this->model_catalog_product->getProduct($product_id);

        if ($product_info) {

            $data['name'] = $product_info['name'];

            $data['description'] = html_entity_decode(
                $product_info['description'],
                ENT_QUOTES,
                'UTF-8'
            );

            $data['price'] = $this->currency->format(
                $product_info['price'],
                $this->session->data['currency']
            );

            $data['thumb'] = $this->config->get('config_url') . 'image/' . $product_info['image'];

            $this->response->setOutput(
                $this->load->view('extension/blueberry/product/quickview', $data)
            );

        } else {
            $this->response->setOutput('Product not found');
        }
    }
}