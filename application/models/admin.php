<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {
	public function get_all_products(){
		$query = "SELECT * FROM products";
		return ($this->db->query($query)->result_array());
	}
}
