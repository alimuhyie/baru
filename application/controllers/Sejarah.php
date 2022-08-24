<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sejarah extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Sejarah | MTsN 1 KOLAKA';
        $this->load->view('templates/header', $data);
        $this->load->view('depan/sejarah');
        $this->load->view('templates/footer');
    }
}

/* End of file Sejarah.php */
