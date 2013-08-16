<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function Home(){
		parent::__construct();
		$this->load->model('cart_model');
		$this->load->model('categories_model');
		$this->load->model('product_model');
		$this->load->library('pagination');
		$this->load->library('user_lib');
	}

	public function index(){
		$prod = $this->product_model->retrieve_product();
		$config["uri_segment"] = 3;
        $config["total_rows"] = count($prod);
        $config["per_page"] = 6;
        $config["base_url"] = base_url().'/index.php/home/index';
        $config['full_tag_open'] = '<div class="pagination pagination-small pagination-centered"><ul>';
		$config['full_tag_close'] = '</ul></div>';
		$config['prev_link'] = '&lt; Prev';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next &gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['first_link'] = FALSE;
		$config['last_link'] = FALSE;
        $this->pagination->initialize($config);

		$data['products'] = $this->db->get('products',$config['per_page'],$this->uri->segment(3));
		$data['categories'] = $this->categories_model->get_categories();
		$data['header'] = 'pages/header';
		$data['navigation'] = 'pages/navigation';
		$data['sidebar'] = 'pages/sidebar';
		$data['carousel'] = 'pages/carousel';
		$data['sidebar_kanan'] = 'pages/sidebar_kanan';
		$data['footer'] = 'pages/footer';
		$data['content'] = 'product';
		$data['cat'] = 'categories_view';
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('index', $data);
	}

	public function category($permalink, $page=null){
		$this->uri->segment(3);

		$data = $this->categories_model->getCategoryByPermalink($permalink);
		//echo '<pre>';
		//echo var_dump($data).'<br>';
		//echo '</pre>';
		$prod = $this->product_model->get_product_by_category($data['category_id']);

		$config["uri_segment"] = 3;
        $config["total_rows"] = count($prod);
        $config["per_page"] = 1;
        $config["base_url"] = base_url().'/index.php/home/category/'.$data['permalink'].'/';
        $config['full_tag_open'] = '<div class="pagination pagination-small pagination-centered"><ul>';
		$config['full_tag_close'] = '</ul></div>';
		$config['prev_link'] = '&lt; Prev';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next &gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['first_link'] = FALSE;
		$config['last_link'] = FALSE;
        $this->pagination->initialize($config);


		$data['header'] = 'pages/header';
		$data['navigation'] = 'pages/navigation';
		$data['sidebar'] = 'pages/sidebar';
		$data['carousel'] = 'pages/carousel';
		$data['sidebar_kanan'] = 'pages/sidebar_kanan';
		$data['footer'] = 'pages/footer';
		$data['products'] = $this->product_model->get_product_by_category($data['category_id'], $config['per_page'],$this->uri->segment(3));
		$data['content'] = 'product/categories';
		$data['categories'] = $this->categories_model->get_categories();
		$data['cat'] = 'categories_view';
		$this->load->view('index', $data);

	}

	public function add_cart(){
		$id = $this->input->post('produk_id');
		$size = $this->input->post('size');
		$qty = $this->input->post('quantity');

		echo $size;
		echo $qty;

		$this->db->where('product_id', $id); // Select where id matches the posted id
		$query = $this->db->get('products', 1);
		
		if ($query->num_rows() > 0) {
		foreach ($query->result() as $row) {	
		$data = array(
            'id' => $id,
            'qty' => $qty,
            'price' => $row->product_price,
            'name' => $row->product_name,
            'options' => array('pic' => $row->product_image, 'size' => $size)
        	 	);
		
		$this->cart->insert($data);

			}
		}
		
		redirect('home');
	}

	public function view_cart(){

		$data['header'] = 'pages/header';
		$data['navigation'] = 'pages/navigation';
		$data['content'] = 'cart/cart_view';
		$data['footer'] = 'pages/footer';
		$this->load->view('cart/index', $data);
	}

	public function coba($id=NULL){

		echo strtolower(random_string('alnum', 8));

	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */