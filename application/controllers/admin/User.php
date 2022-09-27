<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function Index()
    {
        $data['user'] = $this->db->get_where('admin', [
            'email' =>
            $this->session->userdata('email')
        ])->row_array();

        $data['judul'] = 'Dasboard Admin | MTsN 1 Kolaka';
        $this->load->view('templates/headeradmin', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates/footer', $data);
    }
}
