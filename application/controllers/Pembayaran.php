<?php

class Pembayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembayaran_model');
        $this->load->model('Login_model');
        $this->Login_model->keamanan();
    }

    // ===== transaksi pembayaran =====
    public function transaksi()
    {
        $data['transaksi'] = $this->Pembayaran_model->getAllTransaksi();
        $this->load->view('templates/header');
        $this->load->view('pembayaran/transaksi', $data);
        $this->load->view('templates/footer');
    }

    public function transaksiDetail($id)
    {
        $data['transaksi'] = $this->Pembayaran_model->getTransaksiById($id);

        if ($this->input->post('bayar')) {
            $this->Pembayaran_model->pembayaranTransaksi();
            $this->session->set_flashdata('flash', 'diperbarui');
            redirect('pembayaran/transaksi');
        } else {
            $this->load->view('templates/header');
            $this->load->view('pembayaran/transaksi_detail', $data);
            $this->load->view('templates/footer');
        }
    }

    public function cetakStruk($idpel, $bulan, $tahun)
    {
        $data['struk'] = $this->Pembayaran_model->cetakStruk($idpel, $bulan, $tahun);
        $this->load->view('pembayaran/cetak', $data);
    }

    public function hapus($id)
    {
        $this->Pembayaran_model->hapusTransaksi($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('pembayaran/transaksi');
    }

    // ===== Input Rekening =====
    public function input()
    {
        if ($this->input->post('rekening')) {
            // pengambilan id Biaya
            $rek_awal = $this->input->post('rek_awal');
            $rek_akhir = $this->input->post('rek_akhir');
            $biaya = $rek_akhir - $rek_awal;
            if ($biaya >= 43) {
                $id_biaya = 5;
            } elseif ($biaya >= 33) {
                $id_biaya = 4;
            } elseif ($biaya >= 23) {
                $id_biaya = 3;
            } elseif ($biaya >= 13) {
                $id_biaya = 2;
            } else {
                $id_biaya = 1;
            }
            // end of pengambilan id Biaya

            $this->Pembayaran_model->inputRekening($id_biaya);
            $this->session->set_flashdata('flash', 'ditambahkan');
        }

        $data['pelanggan'] = $this->Pembayaran_model->getTransaksiForInput();
        $data['tahun'] = date('Y');
        $month = [
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember'
        ];
        $data['bulan'] = $month[date('m')];


        // $data['rek_awal'] = $this->Pembayaran_model->getRekAwal();
        $this->load->view('templates/header');
        $this->load->view('pembayaran/input_rekening', $data);
        $this->load->view('templates/footer');
    }

    // ===== laporan pembayaran =====
    public function laporan()
    {
        $this->load->view('templates/header');
        $this->load->view('pembayaran/laporan');
        $this->load->view('templates/footer');
    }

    public function cetakLaporan()
    {
        if ($this->input->post('pilih')) {
            $data['transaksi'] = $this->Pembayaran_model->cetakLaporan();
            $data['transaksi2'] = $this->Pembayaran_model->cetakLaporan2();
            $this->load->view('pembayaran/laporan_cetak', $data);
        }
    }
}
