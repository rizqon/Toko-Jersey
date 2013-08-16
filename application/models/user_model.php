  <?php 


  class User_model extends CI_Model{

    function User_model(){
        parent::__construct();
    }

    function cekLogin($username, $password) {
        $this->db->select('*');
        $this->db->where('email', $username);
        $this->db->where('password', md5($password));
        $query = $this->db->get('user', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    function create() {
        $data = array(
            'full_name' => $this->input->post('full_name'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
            'zip' => $this->input->post('zip'),
            'level' => 0,
        );

        $this->db->insert('user', $data);
    }

    function update($id) {
            $data = array(
                'full_name' => $this->input->post('full_name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'zip' => $this->input->post('zip')
            );
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    function update_password($id){
        $data = array('password' => md5($this->input->post('password'))
            );
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    function getUserById($id) {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('user', 1);

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    function get_user($id){
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('user');

        return $query->result_array();
    }

}