<?php

	class Product_model extends CI_Model{

	function retrieve_product(){
		$this->db->select('products.*, category.category_name as name');
		$this->db->from('products');
		$this->db->join('category', 'products.category_id = category.category_id');
		$query = $this->db->get();

		return $query->result_array();
	}

	function get_product_by_category($category_id, $limit = null, $offset=null){
		$this->db->select('p.product_id, p.product_name, p.product_price, p.product_image, p.category_id, p.posted_at, c.category_name as categoriName, c.permalink');
		$this->db->join('category c', 'c.category_id = p.category_id');
		$this->db->where('p.category_id', $category_id);

		$query = $this->db->get('products p');

		return $query->result_array();

	}

	function get_product_by_id($product_id){

		$this->db->select('*');
		$this->db->where('product_id', $product_id);
		$query = $this->db->get('products');

		return $query->result_array();
	}

	function create($data){
		$this->db->insert('products', $data);
	}

	function delete($id) {
        $this->db->where('product_id', $id);
        $this->db->delete('products');
    }

   function update($id) {
        $data = array(
            'product_name' => $this->input->post('name'),
            'product_price' => $this->input->post('price'),
            'category_id' => $this->input->post('category_id')
        );

        $this->db->where('product_id', $id);
        $this->db->update('products', $data);
    }

    function updateImage($id, $real) {
        $data = array(
            'product_name' => $this->input->post('name'),
            'product_price' => $this->input->post('price'),
            'category_id' => $this->input->post('category_id'),
            'product_image' => $real
        );
        $this->db->where('product_id', $id);
        $this->db->update('products', $data);
    }
}