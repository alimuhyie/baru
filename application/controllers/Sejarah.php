<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {

    public function index()
    {
        $data['judul'] = 'Sejarah | MTsN 1 KOLAKA';
        $this->load->view('templates/header', $data);
        $this->load->view('baru/sejarah');
        $this->load->view('templates/footer');
    }

}

/* End of file Sejarah.php */
