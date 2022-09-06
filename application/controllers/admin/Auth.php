<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        // $this->load->library('form_ validation');
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

        $this->form_validation->set_rules(
            'name',
            'Nama',
            'required',
            array('required' => 'Nama tidak Boleh Kosong')
        );

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', ['required' => 'Email tidak boleh kosong']);
        $this->form_validation->set_rules('username', 'username', 'required|trim', ['required' => 'Username tidak boleh kosong']);
        $this->form_validation->set_rules('password', 'password', 'required|trim', ['required' => 'Password tidak boleh kosong']);
        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]', ['required' => 'Password tidak sama']);



        if ($this->form_validation->run() == FALSE) {

            $data['judul'] = 'Registrasi | MTsN 1 KOLAKA';
            // $this->load->view('templates/header',$data);
            $this->load->view('admin/registrasi', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'nama' => $this->input->post('name'),
                'usename' => $this->input->post('username'),
                'email' => $this->input->post('name'),
                'password' => $this->input->post('password2'),
            ];
        }
    }
}

/* End of file Auth.php */
