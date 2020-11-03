<?php 

class Ketua extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'Ketua | Dashboard',
            'users' => $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_mobile');
        $this->load->view('templates/sidebar_ketua');
        $this->load->view('templates/topbar');
        $this->load->view('ketua/dashboard/index');
        $this->load->view('templates/footer');
    }

    public function penjualan_sampah()
    {
        $data = [
            'title' => 'Ketua | Penjualan Sampah',
            'users' => $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array(),
        ];
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_mobile');
        $this->load->view('templates/sidebar_ketua');
        $this->load->view('templates/topbar');
        $this->load->view('ketua/penjualan_sampah/index');
        $this->load->view('templates/footer');
    }
}