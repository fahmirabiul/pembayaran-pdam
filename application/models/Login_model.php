<?php

class Login_model extends CI_Model
{
    public function ambilLogin($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('admin');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $sess = ['username' => $row->username, 'password' => $row->password];
            }
            $this->session->set_userdata($sess);
            redirect('welcome');
        } else {
            $this->session->set_flashdata('flash', 'MAAF Username atau Password Salah!');
            redirect('login');
        }
    }

    public function keamanan()
    {
        $username = $this->session->userdata('username');
        if (empty($username)) {
            $this->session->sess_destroy();
            redirect('login');
        }
    }
}
