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
        $this->form_validation->set_rules('email', 'email', 'trim|required', ['required' => 'Email tidak boleh kosong']);
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[8]|max_length[12]', ['required' => 'Password tidak boleh kosong']);


        if ($this->form_validation->run() == FALSE) {

            $data['judul'] = 'Login Admin | MTsN 1 KOLAKA';
            // $this->load->view('templates/header', $data);
            $this->load->view('admin/login', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('admin', ['email' => $email])->row_array();

        if ($user) {
            // user ada
            if ($user['is_active'] == 1) {
                # cek password
                if (password_verify($password, $user['password'])) {
                    # jika password cocok
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['status']
                    ];

                    $this->session->set_userdata($data);
                    redirect('User');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                    Password yang Anda Masukkan Salah</div>');
                    redirect('Login-Admin');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Email yang Anda Masukkan Belum di Aktifkan</div>');
                redirect('Login-Admin');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Email tidak Terdaftar</div>');
            redirect('Login-Admin');
        }
    }

    public function registrasi()
    {

        $this->form_validation->set_rules(
            'name',
            'Nama',
            'required',
            array('required' => 'Nama tidak Boleh Kosong')
        );

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[admin.email]', ['required' => 'Email tidak boleh kosong', 'is_unique' => 'Email yang Anda masukkan telah terdaftar']);
        $this->form_validation->set_rules('username', 'username', 'required|trim', ['required' => 'Username tidak boleh kosong']);
        $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[8]|max_length[12]', ['required' => 'Password tidak boleh kosong']);
        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password]|min_length[8]|max_length[12]', ['required' => 'Password tidak sama']);



        if ($this->form_validation->run() == FALSE) {

            $data['judul'] = 'Registrasi | MTsN 1 KOLAKA';
            // $this->load->view('templates/header',$data);
            $this->load->view('admin/registrasi', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('name')),
                'username' => htmlspecialchars($this->input->post('username')),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password2'), PASSWORD_DEFAULT),
                'status' => 1,
                'img' => 'default.jpg',
                'is_active' => 1,
            ];
            $this->db->insert('admin', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Registrasi berhasil, silahkan login untuk memulai sesi Anda</div>');
            redirect('Login-Admin');
        }
    }

    public function logout()
    {

        $this->session->unset_userdata('email');
        $this->session->unset_userdata('status');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Anda Berhasil Logout</div>');
        redirect('Login-Admin');
    }
}

/* End of file Auth.php */
