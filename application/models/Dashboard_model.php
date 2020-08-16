<?php

class Dashboard_model extends CI_Model
{
    // ===== Progress Transaksi Bulan ini =====
    // Get Bulan
    // Get Tahun
    // get semua transaksi Bulan ini
    // get transaksi lunas Bulan ini
    // ===== end of Transaksi =====

    public function varAllTransaksi()
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
        return $query->num_rows();
    }

    public function varSelectedTransaksi()
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
        $this->db->where('status_transaksi', 'Dibayar');

        $query = $this->db->get();
        return $query->num_rows();
    }

    // ===== Pendapatan Bulan ini =====
    public function varIncome()
    {
        // GetBulan dan GetTahun
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
        $this->db->join('biaya', 'transaksi.id_biaya = biaya.id_biaya');
        $this->db->where('bulan', $bulan);
        $this->db->where('tahun', $tahun);
        $this->db->where('status_transaksi', 'Dibayar');

        $query = $this->db->get();
        return $query->result_array();
    }

    // ===== Hutang Bulan ini =====
    public function varDebt()
    {
        // GetBulan dan GetTahun
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
        $this->db->join('biaya', 'transaksi.id_biaya = biaya.id_biaya');
        $this->db->where('bulan', $bulan);
        $this->db->where('tahun', $tahun);
        $this->db->where('status_transaksi', 'Belum Dibayar');

        $query = $this->db->get();
        return $query->result_array();
    }
}
