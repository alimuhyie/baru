<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function Index()
    {
        $data['judul'] = 'Beranda | MTsN 1 Kolaka';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/baru');
        $this->load->view('templates/footer');
    }
}
