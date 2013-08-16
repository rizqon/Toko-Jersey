<?php 

class Product extends CI_Controller{

	function Product(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('user_lib');
		$this->user_lib->cekAdminLogin();
		$this->load->model('product_model');
		$this->load->model('categories_model');
	}

	function get_product(){

		$cat = $this->categories_model->get_categories();

		$data['product'] = $this->product_model->retrieve_product();
		$data['header'] = 'admin/header';
		$data['footer'] = 'admin/footer';
		$data['content'] = 'admin/product';
		$this->load->view('admin/index', $data);

		$this->session->set_userdata('url', current_url());	
	}

	function add(){
		$params = array(
						'product_name' => $this->input->post('name'),
						'product_price' => $this->input->post('price'),
						'category_id' => $this->input->post('category_id'),
						);
	
		$config['upload_path'] = './assets/product/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload('image'))
		{
		}	
		else
		{
			$data = $this->upload->data();
			$params['product_image'] = $data['orig_name'];
			$this->product_model->create($params);
		}
		$data['category'] = $this->categories_model->get_categories();
		$data['header'] = 'admin/header';
		$data['footer'] = 'admin/footer';
		$data['content'] = 'admin/add_prod';
		$this->load->view('admin/index', $data);
	}

	function coba(){
		$config['upload_path'] = './assets/product/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload())
		{
			echo 'failed';
		}	
		else
		{
			echo 'success';
		}
		$data['header'] = 'admin/header';
		$data['footer'] = 'admin/footer';
		$data['content'] = 'admin/coba';
		$this->load->view('admin/index', $data);

	}

	function delete($id = null) {
        if ($id == null) {
            $this->session->set_flashdata('message', 'ID produk tidak valid');
            redirect('admin/products/index');
        } else {
            $this->product_model->delete($id);
            $this->session->set_flashdata('message', 'Berhasil menghapus produk');
            redirect('admin/product/get_product');
        }
    }

     function edit($id = null) {

     	if ($id == null) {
            $id = $this->input->post('id');
        }

        $this->form_validation->set_rules('name', 'nama', 'required');
        $this->form_validation->set_rules('price', 'harga', 'required');
        $this->form_validation->set_rules('category_id', 'kategory', 'required');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            if ($_FILES['image']['error'] != 4) {
               $config['upload_path'] = './assets/product/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '100';
				$config['max_width']  = '1024';
				$config['max_height']  = '768';

                $this->load->library('upload', $config);


                if ($this->upload->do_upload("image")) {
                    $data = $this->upload->data();
                    $real = $data['orig_name'];

                    $this->product_model->updateImage($id, $real);
                }
            } else {
                $this->product_model->update($id);
            }
            $this->session->set_flashdata('message', 'Berhasil merubah data produk');
            redirect('admin/product/get_product');
        }
     	$data['product'] = $this->product_model->get_product_by_id($id);
     	$data['header'] = 'admin/header';
		$data['footer'] = 'admin/footer';
		$data['content'] = 'admin/edit_prod';
		$this->load->view('admin/index', $data);
     }
}