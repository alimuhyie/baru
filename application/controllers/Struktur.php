<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Struktur extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Struktur Organisasi | MTsN 1 KOlAKA';
        $this->load->view('templates/header', $data);
        $this->load->view('depan/struktur');
        $this->load->view('templates/footer');
    }
}

/* End of file Struktur.php */
