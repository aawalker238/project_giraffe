<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping extends CI_Controller {

	public function index(){
		$this->load->helper('form');
		$this->load->library('cart');
		$this->load->view('cart');
	}

	public function update(){
		$this->load->library('cart');
		$this->cart->update($_POST);
		redirect(base_url().'shopping');
	}

	public function buy($id){
		$this->load->library('cart');
		$oneProduct = $this->main->getOneProduct($id);
		$data = array(
		               'id'      => $oneProduct['id'],
		               'qty'     => 1,
		               'price'   => $oneProduct['price'],
		               'name'    => $oneProduct['name'],
		            );

		$this->cart->insert($data);
		$this->load->view('cart');
	}

	public function delete($rowid){
		$this->load->library('cart');
		$this->cart->update(array('rowid' => $rowid, 'qty' => 0));
		$this->load->view('cart');
	}
}