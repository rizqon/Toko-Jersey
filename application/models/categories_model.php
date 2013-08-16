<?php

class Categories_model extends CI_Model{

	
	function get_categories(){
		$query = $this->db->get('category');
		return $query->result_array();
	}

	function getCategoryByPermalink($permalink) {
        $this->db->select('*');
        $this->db->where('permalink', $permalink);
        $query = $this->db->get('category', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }


}