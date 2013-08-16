<?php

class User extends CI_Controller{
	
	function User(){
		parent::__construct();
		$this->load->library('form_validation');
        $this->load->library('user_lib');
		$this->load->model('user_model');
        $this->load->model('order_model');
	}

	function register() {
        $this->form_validation->set_rules('full_name', 'nama lengkap', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required|matches[confirm_password]');
        $this->form_validation->set_rules('confirm_password', 'konfirmasi password', 'required');
        $this->form_validation->set_rules('phone', 'telepon', 'required');
        $this->form_validation->set_rules('address', 'alamat lengkap', 'required');
        $this->form_validation->set_rules('zip', 'kode pos', 'required');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $this->user_model->create();
            $this->session->set_flashdata('message', 'Register sukses, silahkan login');
            redirect('user/login');
        }
        $data['header'] = 'pages/header';
		$data['navigation'] = 'pages/navigation';
		$data['footer'] = 'pages/footer';
        $data['content'] = 'user/login';
        $this->load->view('user/index', $data);
    }

    function login() {

        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->user_model->cekLogin($email, $password);
//            printData($user);exit;
            if (!empty($user)) {
                $sessionData['id'] = $user['id'];
                $sessionData['email'] = $user['email'];
                $sessionData['full_name'] = $user['full_name'];
                $sessionData['level'] = $user['level'];
                $sessionData['is_login'] = TRUE;

                $this->session->set_userdata($sessionData);

//                printData($this->session->userdata('level'));exit;
                if ($this->session->userdata('level') == 1) {
                    redirect('admin/home');
                } else {
                    redirect('user/home');
                }
            }

            $this->session->set_flashdata('message', 'Login Gagal!, email dan password tidak sesuai');
            redirect('user/login');
        }
        $data['header'] = 'pages/header';
        $data['navigation'] = 'pages/navigation';
        $data['footer'] = 'pages/footer';
        $data['content'] = 'user/login';
        $this->load->view('user/index', $data);
    }

    function home(){

        $this->user_lib->cekUserLogin();
        $data['header'] = 'pages/header';
        $data['navigation'] = 'pages/navigation';
        $data['footer'] = 'pages/footer';
        $data['content'] = 'user/home';
        $this->load->view('user/index', $data);
    }

    function logout() {

        $this->session->sess_destroy();
        redirect('user/login');
    }

    function history(){
        $this->user_lib->cekUserLogin();
        $data['history'] = $this->order_model->history($this->session->userdata('id'));
        $data['header'] = 'pages/header';
        $data['navigation'] = 'pages/navigation';
        $data['footer'] = 'pages/footer';
        $data['content'] = 'user/history';
        $this->load->view('user/index', $data);
    }

    function update_profile() {
        $this->user_lib->cekUserLogin();
        $this->form_validation->set_rules('full_name', 'nama lengkap', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'telepon', 'required');
        $this->form_validation->set_rules('address', 'alamat lengkap', 'required');
        $this->form_validation->set_rules('city', 'kota', 'required');
        $this->form_validation->set_rules('zip', 'kode pos', 'required');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $this->user_model->update($this->session->userdata('id'));
            $this->session->set_flashdata('message', 'Profil telah disimpan');
            redirect('user/home');
        }
        $data['user'] = $this->user_model->get_user($this->session->userdata('id'));
        $data['header'] = 'pages/header';
        $data['navigation'] = 'pages/navigation';
        $data['footer'] = 'pages/footer';
        $data['content'] = 'user/update';
        $this->load->view('user/index', $data);
    }

    function update_password(){
        $this->user_lib->cekUserLogin();
        $this->form_validation->set_rules('password', 'password', 'required|matches[confirm_password]');
        $this->form_validation->set_rules('confirm_password', 'konfirmasi password', 'required');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $this->user_model->update_password($this->session->userdata('id'));
            $this->session->set_flashdata('message', 'password telah disimpan');
            redirect('user/home');
        }
        $data['header'] = 'pages/header';
        $data['navigation'] = 'pages/navigation';
        $data['footer'] = 'pages/footer';
        $data['content'] = 'user/update_password';
        $this->load->view('user/index', $data);
    }
}