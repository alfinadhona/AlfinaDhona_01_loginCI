<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function RegisterUser()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
        $this->form_validation->set_rules('fname', 'Full Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('contact', 'Contact', 'required');
        $this->form_validation->set_rules('nis', 'NIS', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');

        
        if ($this->form_validation->run() == TRUE) {
            //LOAD MODEL TO CONNECT TO THE DB
            $this->load->model('Model_user');
            $this->Model_user->insertUser();

            $this->session->flashdata('success','You are registered');
            
            redirect('Home/index');
            
        } else {
            $this->load->view('v_register');
        }
        
        
        
    }

}

/* End of file Register.php */

?>