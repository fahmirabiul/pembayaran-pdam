<?php

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index()
    {
        $this->load->view('login/index');
    }

    public function cekLogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->Login_model->ambilLogin($username, $password);
    }

    public function logout()
    {
        $this->session->set_userdata('username', FALSE);
        $this->session->sess_destroy();
        redirect('login');
    }
}
