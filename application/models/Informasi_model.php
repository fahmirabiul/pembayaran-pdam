<?php

class Informasi_model extends CI_Model
{
    public function getAllBiaya()
    {
        return $this->db->get('biaya')->result_array();
    }

    public function getBiaya($id)
    {
        return $this->db->get_where('biaya', ['id_biaya' => $id])->row_array();
    }

    public function ubahBiaya()
    {
        $data = [
            "jenis" => $this->input->post('jenis'),
            "harga" => $this->input->post('harga')
        ];

        $this->db->where('id_biaya', $this->input->post('id_biaya'));
        $this->db->update('biaya', $data);
    }

    public function hapusBiaya($id)
    {
        $this->db->delete('biaya', ['id_biaya' => $id]);
    }

    public function tambahBiaya()
    {
        $data = [
            "jenis" => $this->input->post('jenis'),
            "harga" => $this->input->post('harga')
        ];

        return $this->db->insert('biaya', $data);
    }

    public function getAllKelas()
    {
        return $this->db->get('kelas')->result_array();
    }

    public function getKelas($id)
    {
        return $this->db->get_where('kelas', ['id_kelas' => $id])->row_array();
    }

    public function ubahKelas()
    {
        $data = [
            "nama_kelas" => $this->input->post('nama_kelas'),
            "administrasi" => $this->input->post('administrasi')
        ];

        $this->db->where('id_kelas', $this->input->post('id_kelas'));
        $this->db->update('kelas', $data);
    }

    public function hapusKelas($id)
    {
        $this->db->delete('kelas', ['id_kelas' => $id]);
    }

    public function tambahKelas()
    {
        $data = [
            "nama_kelas" => $this->input->post('nama_kelas'),
            "administrasi" => $this->input->post('administrasi')
        ];

        return $this->db->insert('kelas', $data);
    }
}
