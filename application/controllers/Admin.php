<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('Login_model');
        $this->Login_model->keamanan();
    }

    public function index()
    {
        $data['admin'] = $this->Admin_model->getAllAdmin();
        $this->load->view('templates/header');
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        if ($this->input->post('ubah')) {
            $this->Admin_model->ubahAdmin();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('admin');
        } else {
            $data['admin'] = $this->Admin_model->getAdmin($id);
            $this->load->view('templates/header');
            $this->load->view('admin/ubah', $data);
            $this->load->view('templates/footer');
        }
    }
}
