<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Login Admin | MTsN 1 KOLAKA';
        $this->load->view('templates/header', $data);
        $this->load->view('admin/login', $data);
        $this->load->view('templates/footer', $data);
    }
}

/* End of file Login.php */
