<?php

class Admin_model extends CI_Model
{
    public function getAllAdmin()
    {
        return $this->db->get('admin')->result_array();
    }

    public function getAdmin($id)
    {
        return $this->db->get_where('admin', ['id_admin' => $id])->row_array();
    }

    public function ubahAdmin()
    {
        $data = [
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password')
        ];

        $this->db->where('id_admin', $this->input->post('id_admin'));
        $this->db->update('admin', $data);
    }
}
