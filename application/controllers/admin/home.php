<?

class Home extends CI_Controller{


	function Home(){
		parent::__construct();
		$this->load->library('user_lib');
		$this->load->model('order_model');
		$this->user_lib->cekAdminLogin();
	}

	function index(){
		$data['recent'] = $this->order_model->recent_order();
		$data['header'] = 'admin/header';
		$data['footer'] = 'admin/footer';
		$data['content'] = 'admin/dashboard';
		$this->load->view('admin/index', $data);

		$this->session->set_userdata('url', current_url());	
	}

	function update_order(){
		$id = $this->input->post('id');
		$status = $this->input->post('status');

		$this->order_model->update_status($id, $status);

		$url=$this->session->userdata('url');
		redirect($url, 'refresh');
	}

	function pending_order(){
		$data['recent'] = $this->order_model->pending_order();
		$data['header'] = 'admin/header';
		$data['footer'] = 'admin/footer';
		$data['content'] = 'admin/pending';
		$this->load->view('admin/index', $data);

		$this->session->set_userdata('url', current_url());	
	}

	function sending_order(){
		$data['recent'] = $this->order_model->sending_order();
		$data['header'] = 'admin/header';
		$data['footer'] = 'admin/footer';
		$data['content'] = 'admin/sending';
		$this->load->view('admin/index', $data);

		$this->session->set_userdata('url', current_url());	
	}

	function success_order(){
		$data['recent'] = $this->order_model->success_order();
		$data['header'] = 'admin/header';
		$data['footer'] = 'admin/footer';
		$data['content'] = 'admin/success';
		$this->load->view('admin/index', $data);

		$this->session->set_userdata('url', current_url());	
	}
}