<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Model {

	public function getAllProducts(){
		$query = "SELECT * FROM products";
		$products = $this->db->query($query)->result_array();
		return $products;
	}

	public function getOneProduct($id){
		$query = "SELECT * FROM products WHERE id = ?";
		$values = array($id);
		$oneProduct = $this->db->query($query, $values)->row_array();
		return $oneProduct;
	}

	public function getOneCategory($id){
		$query = "SELECT name FROM categories WHERE categories.id = ?";
		$values = array($id);
		$category = $this->db->query($query, $values)->row_array();
		return $category;
	}

	public function getProductsInCategory($id){
		$query = "SELECT * FROM products JOIN categorization ON product_id = products.id JOIN categorization ON categories where categores.id = category_id WHERE categories.id = ?";
		$values = array($id);
		$products = $this->db->query($query, $values)->result_array();
		return $products;
	}

	public function getProductsInCategoryLimit($id){
		$query = "SELECT * FROM products JOIN categorization ON product_id = products.id JOIN categorization ON categories where categores.id = category_id WHERE categories.id = ? LIMIT 6";
		$values = array($id);
		$products = $this->db->query($query, $values)->result_array();
		return $products;
	}
}
