<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tu extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Tenaga Pendidik | MTsN 1 KOLAKA';
        $this->load->view('templates/header', $data);
        $this->load->view('depan/tatausaha', $data);
        $this->load->view('templates/footer', $data);
    }
}

/* End of file Tu.php */
