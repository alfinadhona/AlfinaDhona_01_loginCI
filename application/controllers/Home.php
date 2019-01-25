<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('v_login');
    }

    public function Register()
    {
        $this->load->view('register_view');
    }

    // public function Login()
    // {
    //     $this->load->view('Login_view');
    // }

    public function dashboard()
    {
        $this->load->view('v_home');
        
    }

}

/* End of file Home.php */


?>