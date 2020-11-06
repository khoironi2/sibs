<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'Sistem Informasi Bank Sampah Enviro 18',
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_mobile');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar_home');
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }
}
