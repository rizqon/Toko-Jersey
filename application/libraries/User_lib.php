<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class User_lib {

    var $CI;

    function __construct() {
        $this->CI = &get_instance();
//        $this->isLogin();
    }

    function isLogin() {
        if ($this->CI->session->userdata('is_login') == TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function isAdminLogin() {
        if ($this->CI->session->userdata('level') == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function cekUserLogin() {
        if ($this->isLogin() != TRUE) {
            $this->CI->session->set_flashdata('message', 'Anda tidak memiliki hak akses');
            redirect('user/login');
        }
    }

    function cekAdminLogin() {
        if ($this->isLogin() == TRUE) {
            if ($this->CI->session->userdata('level') != 1) {
                $this->CI->session->set_flashdata('message', 'Anda tidak memiliki hak akses halaman Administrator');
                redirect('user/login');
            }
        } else {
            $this->CI->session->set_flashdata('message', 'Anda tidak memiliki hak akses halaman Administrator');
            redirect('user/login');
        }
    }
}

/* End of file Someclass.php */