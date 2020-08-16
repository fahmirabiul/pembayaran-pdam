<?php

class Pelanggan_model extends CI_Model
{
    public function getAllPelanggan()
    {
        return $this->db->get('pelanggan')->result_array();
    }

    public function tambahPelanggan()
    {
        $data = [
            "nama" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat'),
            "rt" => $this->input->post('rt'),
            "rw" => $this->input->post('rw'),
            "no_rek" => $this->input->post('no_rek'),
            "nama_kelas" => $this->input->post('nama_kelas')
        ];

        $this->db->insert('pelanggan', $data);
    }

    public function inputRekening($id)
    {
        // GET DATE
        $bulan_now = date('M');
        $kurang_bulan = mktime(0, 0, 0, date('m') - 1, date('d'), date('Y'));
        $bulan_kemarin = date('m', $kurang_bulan);

        if ($bulan_now == 'Jan') {
            $tahun1 = date('Y');
            $tahun = date('Y', strtotime('-1 year', strtotime($tahun1)));
        } else {
            $tahun = date('Y');
        }

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
        $bulan = $month[$bulan_kemarin];
        // END OF GET DATE

        $data = [
            "tgl_pembayaran" => date('Y-m-d'),
            "id_pel" => $id,
            "id_biaya" => "1",
            "bulan" => $bulan,
            "tahun" => $tahun,
            "rek_awal" => 0,
            "rek_akhir" => 0,
            "status_transaksi" => "Dibayar"
        ];

        $this->db->insert('transaksi', $data);
    }

    public function hapusPelanggan($id)
    {
        // $this->db->where('id_pel', $id);
        $this->db->delete('pelanggan', ['id_pel' => $id]);
    }

    public function getPelanggan($id)
    {
        return $this->db->get_where('pelanggan', ['id_pel' => $id])->row_array();
    }

    public function getPelangganByName($nama)
    {
        return $this->db->get_where('pelanggan', ['nama' => $nama])->row_array();
    }

    public function ubahPelanggan()
    {
        $data = [
            "nama" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat'),
            "rt" => $this->input->post('rt'),
            "rw" => $this->input->post('rw'),
            "no_rek" => $this->input->post('no_rek'),
            "nama_kelas" => $this->input->post('nama_kelas')
        ];

        $this->db->where('id_pel', $this->input->post('id_pel'));
        $this->db->update('pelanggan', $data);
    }
}
