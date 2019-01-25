<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

    public function insertUser()
    {
        //INSERT DATA
        $data = array(
          'username' => $this->input->post('username'),
          'fname' => $this->input->post('fname'),
          'email' => $this->input->post('email'),
          'contact' => $this->input->post('contact'),
          'nis' => $this->input->post('nis'),
          'password' => sha1($this->input->post('password'))
        );

        //INSERT DATA TO DATABASE
        $this->db->insert('user', $data);
        
    }

    public function checkLogin()
    {
        $username = $this->input->post('username', TRUE);
        $password = sha1($this->input->post('password', TRUE));

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('user');

        if ($result->num_rows() == 1) {
            return $result->result();
        } else {
            redirect ('Home/index');
        }
        
        
    }

}

/* End of file Model_user.php */


?>