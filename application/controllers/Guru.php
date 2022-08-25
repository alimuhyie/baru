<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

    public function index()
    {
        $data['judul'] = 'Guru | MTsN 1 Kolaka';
        $this->load->view('templates/header',$data);
        $this->load->view('depan/guru',$data);
        $this->load->view('templates/footer',$data);
    }

}

/* End of file Guru.php */
