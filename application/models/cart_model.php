<?php

class Cart_model extends CI_Model{

	function validate_add_cart_item(){

		$id = $this->input->post('produk_id');
		$qty = $this->input->post('quantity');

		$this->db->where('product_id', $id);
		$query = $this->db->get('products', 1);

		if($query->num_rows > 0) {
			//cucok

			foreach ($query->result() as $row) {
				$data = array (
					'id' => $id,
					'qty' => $qty,
					'price' => $row->product_price,
					'name' => $row->product_name,
				);
			}

			$this->cart->insert($data);

		}else{
			return FALSE;
		}
	}
}