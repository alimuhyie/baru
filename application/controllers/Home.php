<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function Index()
    {
        $this->load->view('templates/test');
        //     $this->load->view('templates/home');
        //     $this->load->view('templates/footer');
    }
}
