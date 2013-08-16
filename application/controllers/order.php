<?php

class Order extends CI_Controller {



	function Order(){
		parent::__construct();
		$this->load->library('user_lib');
		$this->load->library('cart');
		$this->load->model('user_model');
		$this->load->model('product_model');
		$this->load->model('order_model');
	}

	function checkout(){
	if($this->user_lib->isLogin() == FALSE ){
		$this->session->set_flashdata('message', 'Anda harus login terlebih dahulu!');
		redirect('user/login');
	}
	else{
		$this->db->select('*');
		$this->db->where('id', $this->session->userdata('id'));
		$query = $this->db->get('user', 1);
		$data['header'] = 'pages/header';
		$data['navigation'] = 'pages/navigation';
		$data['user'] = $query;
		$data['content'] = 'order/checkout';
		$data['footer'] = 'pages/footer';
		$this->load->view('order/order_index', $data);
		}
	}

	function proses(){
	if($this->user_lib->isLogin() == FALSE ){
		$this->session->set_flashdata('message', 'Anda harus login terlebih dahulu!');
		redirect('user/login');
	}
	$carts = $this->cart->contents();
	foreach ($carts as $item) {
		$order['order_code'] = strtolower(random_string('alnum', 8));
		$order['full_name'] = $this->input->post('full_name');
		$order['email'] = $this->input->post('email');
		$order['address'] = $this->input->post('address');
		$order['city'] = $this->input->post('city');
		$order['phone'] = $this->input->post('phone');
		$order['zip'] = $this->input->post('zip');
		$order['total_order'] = $this->cart->total();
		$order['user_id'] = $this->session->userdata('id');
		$order['product_id'] = $item['id'];
		$order['size'] = $item['options']['size'];
		$order['qty'] = $item['qty'];
		$order['name'] = $item['name'];

		$this->order_model->create($order);
	}

	$this->cart->destroy();
    $this->session->set_flashdata('message', 'Pemesanan berhasil, tunggu informasi email dari kami dalam waktu maks. 2x24 jam');
    redirect('user/home');

	}

}