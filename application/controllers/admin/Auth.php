<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        //Do your magic here
    }


    public function index()
    {
        $data['judul'] = 'Login Admin | MTsN 1 KOLAKA';
        // $this->load->view('templates/header', $data);
        $this->load->view('admin/login', $data);
        $this->load->view('templates/footer', $data);
    }

    public function registrasi()
    {

        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');


        if ($this->form_validation->run() == FALSE) {

            $data['judul'] = 'Registrasi | MTsN 1 KOLAKA';
            // $this->load->view('templates/header',$data);
            $this->load->view('admin/registrasi', $data);
            $this->load->view('templates/footer', $data);
        } else {
            echo 'berhasil hfgdfgfjb';
        }
    }
}

/* End of file Auth.php */
