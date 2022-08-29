<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Registrasi | MTsN 1 KOLAKA';
        // $this->load->view('templates/header',$data);
        $this->load->view('admin/registrasi', $data);
        $this->load->view('templates/footer', $data);
    }
}

/* End of file Registrasi.php */
