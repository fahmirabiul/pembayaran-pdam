<?php

class Pelanggan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pelanggan_model');
        $this->load->model('Login_model');
        $this->Login_model->keamanan();
    }

    public function index()
    {
        $data['pelanggan'] = $this->Pelanggan_model->getAllPelanggan();
        $this->load->view('templates/header');
        $this->load->view('pelanggan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->input->post('tambah')) {
            $this->Pelanggan_model->tambahPelanggan();
            $this->session->set_flashdata('flash', 'ditambahkan');
            sleep(2);

            // Get Pelanggan Baru
            $nama = $this->input->post('nama');
            $data['pelanggan_baru'] = $this->Pelanggan_model->getPelangganByName($nama);

            sleep(2);
            $this->Pelanggan_model->inputRekening($data['pelanggan_baru']['id_pel']);
            redirect('pelanggan');
        } else {
            $this->load->view('templates/header');
            $this->load->view('pelanggan/tambah');
            $this->load->view('templates/footer');
        }
    }

    public function hapus($id)
    {
        $this->Pelanggan_model->hapusPelanggan($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('pelanggan');
    }

    public function detail($id)
    {
        $data['pelanggan'] = $this->Pelanggan_model->getPelanggan($id);

        if ($this->input->post('ubah')) {
            $this->Pelanggan_model->ubahPelanggan();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('pelanggan');
        } else {
            $this->load->view('templates/header');
            $this->load->view('pelanggan/detail', $data);
            $this->load->view('templates/footer');
        }
    }
}
