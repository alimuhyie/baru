<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visi extends CI_Controller
{

    public function Index()
    {
        $data['judul'] = 'Visi Misi | MTsN 1 Kolaka';
        $this->load->view('templates/header', $data);
        $this->load->view('depan/visi');
        $this->load->view('templates/footer');
    }
}

/* End of file Controllername.php */
