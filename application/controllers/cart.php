<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function Home(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->library('user_lib');
	}

	function delete($rowId) {
        $data = array('rowid' => $rowId, 'qty' => 0);

        $this->cart->update($data);
        $this->session->set_flashdata('message', 'Item telah dihapus');
        redirect('home/view_cart');
    }

    function update() {

        $this->cart->update($_POST);
        $this->session->set_flashdata('message', 'Keranjang telah di update');
        redirect('home/view_cart');
    }

}

/* End of file cart.php */
/* Location: ./application/controllers/cart.php */