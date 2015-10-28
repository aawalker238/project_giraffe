<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mains extends CI_Controller {

	public function index(){
		$products = $this->main->getAllProducts();
		$this->load->view('storefront', array('products' => $products));
	}

	public function oneProduct($id){
		$oneProduct = $this->main->getOneProduct($id);
		$this->load->view('single_product', array('oneProduct' => $oneProduct));

		//USE CODE BELOW INSTEAD OF ABOVE CODE WHEN CATEGORIES SET UP IN DATABASE

		// $products = $this->main->getProductsInCategoryLimit($id);
		// $this->load->view('single_product', array('one_product' => $oneProduct, 'products' => $products));
	}

	public function productsInCategory($id){
		$category = $this->main->getOneCategory($id);
		$products = $this->main->getProductsInCategory($id);
		$this->load->view('storefront_categorized', $products, $category);
	}

	public function view_cart(){
		$this->load->view('cart');
	}

}
