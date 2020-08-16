<?php

class Pembayaran_model extends CI_Model
{
    // ===== Pembayaran ======

    public function getAllTransaksi()
    {
        // return $this->db->get('transaksi')->result_array();
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('pelanggan', 'transaksi.id_pel = pelanggan.id_pel');
        $this->db->join('bulan', 'transaksi.bulan = bulan.nama_bulan');
        $this->db->join('biaya', 'transaksi.id_biaya= biaya.id_biaya');
        $this->db->order_by('tahun DESC, id_bulan DESC');

        $query = $this->db->get();
        return $query->result_array();
    }

    public function getTransaksiById($id)
    {
        // $this->db->get_where('transaksi', ['id_transaksi' => $id])->row_array();
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('pelanggan', 'transaksi.id_pel = pelanggan.id_pel');
        $this->db->join('biaya', 'transaksi.id_biaya = biaya.id_biaya');
        $this->db->where('transaksi.id_transaksi', $id);

        $query = $this->db->get();
        return $query->row_array();
    }

    public function pembayaranTransaksi()
    {
        $data = [
            "id_transaksi" => $this->input->post('id_transaksi'),
            "tgl_pembayaran" => date('Y-m-d'),
            "id_pel" => $this->input->post('id_pel'),
            "id_biaya" => $this->input->post('id_biaya'),
            "bulan" => $this->input->post('bulan'),
            "tahun" => $this->input->post('tahun'),
            "rek_awal" => $this->input->post('rek_awal'),
            "rek_akhir" => $this->input->post('rek_akhir'),
            "status_transaksi" => "Dibayar"
        ];

        $this->db->where('id_transaksi', $this->input->post('id_transaksi'));
        $this->db->update('transaksi', $data);
    }

    public function cetakStruk($idpel, $bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('pelanggan', 'transaksi.id_pel = pelanggan.id_pel');
        $this->db->join('biaya', 'transaksi.id_biaya = biaya.id_biaya');
        $this->db->where('transaksi.id_pel', $idpel);
        $this->db->where('transaksi.bulan', $bulan);
        $this->db->where('transaksi.tahun', $tahun);

        $query = $this->db->get();
        return $query->row_array();
    }

    public function hapusTransaksi($id)
    {
        $this->db->delete('transaksi', ['id_transaksi' => $id]);
    }

    // ===== End of Pembayaran =====

    // ===== Input Rekening =====

    public function getWarga()
    {
        return $this->db->get('pelanggan')->result_array();
    }

    public function getRekAwal()
    {
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

        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where('bulan', $bulan);
        $this->db->where('tahun', $tahun);

        $query = $this->db->get();
        return $query->result_array();
    }

    public function getTransaksiForInput()
    {
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

        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('pelanggan', 'transaksi.id_pel = pelanggan.id_pel');
        $this->db->where('bulan', $bulan);
        $this->db->where('tahun', $tahun);

        $query = $this->db->get();
        return $query->result_array();
    }

    public function inputRekening($id_biaya)
    {
        $data = [
            "tgl_pembayaran" => "",
            "id_pel" => $this->input->post('id_pel'),
            "id_biaya" => $id_biaya,
            "bulan" => $this->input->post('bulan'),
            "tahun" => $this->input->post('tahun'),
            "rek_awal" => $this->input->post('rek_awal'),
            "rek_akhir" => $this->input->post('rek_akhir'),
            "status_transaksi" => "Belum Dibayar"
        ];

        $this->db->insert('transaksi', $data);
    }

    // ===== End of Input Rekening =====

    // ===== Cetak Laporan =====

    public function cetakLaporan()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('pelanggan', 'transaksi.id_pel = pelanggan.id_pel');
        $this->db->join('biaya', 'transaksi.id_biaya = biaya.id_biaya');
        $this->db->like('tahun', $tahun);
        $this->db->like('bulan', $bulan);
        $this->db->like('status_transaksi', 'Telah Dibayar');
        $this->db->order_by('nama', 'ASC');

        $query = $this->db->get();
        return $query->result_array();
    }

    public function cetakLaporan2()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('pelanggan', 'transaksi.id_pel = pelanggan.id_pel');
        $this->db->join('biaya', 'transaksi.id_biaya = biaya.id_biaya');
        $this->db->like('tahun', $tahun);
        $this->db->like('bulan', $bulan);
        $this->db->like('status_transaksi', 'Belum Dibayar');
        $this->db->order_by('nama', 'ASC');

        $query = $this->db->get();
        return $query->result_array();
    }

    // ===== End of Cetak Laporan
}
