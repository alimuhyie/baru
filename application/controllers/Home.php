<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function Index()
    {
        $data['judul'] = 'Beranda | MTsN 1 Kolaka';
        $this->load->view('templates/baru', $data);
        //     $this->load->view('templates/home');
        //     $this->load->view('templates/footer');
    }


    public function kampret()
    {
        //     siap bossku
    }
}
