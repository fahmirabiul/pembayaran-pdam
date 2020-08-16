<?php

class Informasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Informasi_model');
        $this->load->model('Login_model');
        $this->Login_model->keamanan();
    }

    public function biaya()
    {
        $data['biaya'] = $this->Informasi_model->getAllBiaya();
        $this->load->view('templates/header');
        $this->load->view('informasi/tb_biaya', $data);
        $this->load->view('templates/footer');
    }

    public function ubahBiaya($id)
    {
        if ($this->input->post('ubah')) {
            $this->Informasi_model->ubahBiaya();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('informasi/biaya');
        } else {
            $data['biaya'] = $this->Informasi_model->getBiaya($id);
            $this->load->view('templates/header');
            $this->load->view('informasi/ubahBiaya', $data);
            $this->load->view('templates/footer');
        }
    }

    public function hapusBiaya($id)
    {
        $this->Informasi_model->hapusBiaya($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('informasi/biaya');
    }

    public function tambahBiaya()
    {
        if ($this->input->post('tambah')) {
            $this->Informasi_model->tambahBiaya();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('informasi/biaya');
        } else {
            $this->load->view('templates/header');
            $this->load->view('informasi/tambahBiaya');
            $this->load->view('templates/footer');
        }
    }

    public function kelas()
    {
        $data['kelas'] = $this->Informasi_model->getAllKelas();
        $this->load->view('templates/header');
        $this->load->view('informasi/tb_kelas', $data);
        $this->load->view('templates/footer');
    }

    public function ubahKelas($id)
    {
        if ($this->input->post('ubah')) {
            $this->Informasi_model->ubahKelas();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('informasi/kelas');
        } else {
            $data['kelas'] = $this->Informasi_model->getKelas($id);
            $this->load->view('templates/header');
            $this->load->view('informasi/ubahKelas', $data);
            $this->load->view('templates/footer');
        }
    }

    public function hapusKelas($id)
    {
        $this->Informasi_model->hapusKelas($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('informasi/kelas');
    }

    public function tambahKelas()
    {
        if ($this->input->post('tambah')) {
            $this->Informasi_model->tambahKelas();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('informasi/kelas');
        } else {
            $this->load->view('templates/header');
            $this->load->view('informasi/tambahKelas');
            $this->load->view('templates/footer');
        }
    }
}
