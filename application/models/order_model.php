<?php

class Order_model extends CI_Model{


	function Order_model(){
		parent::__construct();
	}

	function create($data){
		$this->db->insert('orders', $data);
	}

	function history($id){
		$this->db->select('*');
		$this->db->where('user_id', $id);
		$this->db->order_by('time', 'desc');
		$query = $this->db->get('orders');

		return $query->result_array();
	}

	function recent_order(){
		$this->db->select('*');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get('orders');

		return $query->result_array();
	}

	function update_status($id, $status){
		 $data = array('status' => $status
		 	);
		$this->db->where('id', $id);
        $this->db->update('orders', $data);
	}

	function pending_order(){
		$this->db->select('*');
		$this->db->order_by('id', 'desc');
		$this->db->where('status', 1);
		$query = $this->db->get('orders');

		return $query->result_array();
	}

	function sending_order(){
		$this->db->select('*');
		$this->db->order_by('id', 'desc');
		$this->db->where('status', 2);
		$query = $this->db->get('orders');

		return $query->result_array();
	}

	function success_order(){
		$this->db->select('*');
		$this->db->order_by('id', 'desc');
		$this->db->where('status', 3);
		$query = $this->db->get('orders');

		return $query->result_array();
	}
}