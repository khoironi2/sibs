<?php

class Admin extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->cek_status();
    //     $this->CI = &get_instance();
    // }

    // |------------------------------------------------------
    // | Dashboard
    // |------------------------------------------------------

    public function index()
    {
        $data = [
            'title' => 'Admin | Dashboard',
            'users' => $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_mobile');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/topbar');
        $this->load->view('admin/dashboard/index');
        $this->load->view('templates/footer');
    }

    // |------------------------------------------------------
    // | Data Nasabah
    // |------------------------------------------------------
    public function nasabah()
    {
        $data = [
            'title' => 'Admin | Data Nasabah',
            'users' => $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_mobile');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/topbar');
        $this->load->view('admin/nasabah/index');
        $this->load->view('templates/footer');
    }

    public function create_nasabah()
    {
        $data = [
            'title' => 'Admin | Tambah Data Nasabah',
            'users' => $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_mobile');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/topbar');
        $this->load->view('admin/nasabah/create');
        $this->load->view('templates/footer');
    }
    
    public function update_nasabah()
    {
        $data = [
            'title' => 'Admin | Update Data Nasabah',
            'users' => $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_mobile');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/topbar');
        $this->load->view('admin/nasabah/update');
        $this->load->view('templates/footer');
    }

    // |------------------------------------------------------
    // | Katalog Sampah
    // |------------------------------------------------------

    public function katalog_sampah()
    {
        $data = [
            'title' => 'Admin | Katalog Sampah',
            'users' => $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array(),
        ];
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_mobile');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/topbar');
        $this->load->view('admin/katalog_sampah/index');
        $this->load->view('templates/footer');
    }

    public function create_katalog_sampah()
    {
        $data = [
            'title' => 'Admin | Create Katalog Sampah',
            'users' => $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array(),
        ];
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_mobile');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/topbar');
        $this->load->view('admin/katalog_sampah/create');
        $this->load->view('templates/footer');
    }
    
    public function update_katalog_sampah()
    {
        $data = [
            'title' => 'Admin | Update Katalog Sampah',
            'users' => $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array(),
        ];
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_mobile');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/topbar');
        $this->load->view('admin/katalog_sampah/update');
        $this->load->view('templates/footer');
    }

    // |------------------------------------------------------
    // | Penjualan Sampah
    // |------------------------------------------------------

    public function penjualan_sampah()
    {
        $data = [
            'title' => 'Admin | Penjualan Sampah',
            'users' => $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array(),
        ];
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_mobile');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/topbar');
        $this->load->view('admin/penjualan_sampah/index');
        $this->load->view('templates/footer');
    }

    public function create_penjualan_sampah()
    {
        $data = [
            'title' => 'Admin | Create Penjualan Sampah',
            'users' => $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array(),
        ];
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_mobile');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/topbar');
        $this->load->view('admin/penjualan_sampah/create');
        $this->load->view('templates/footer');
    }

    public function update_penjualan_sampah()
    {
        $data = [
            'title' => 'Admin | Update Penjualan Sampah',
            'users' => $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array(),
        ];
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_mobile');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/topbar');
        $this->load->view('admin/penjualan_sampah/update');
        $this->load->view('templates/footer');
    }

    // |------------------------------------------------------
    // | Laporan
    // |------------------------------------------------------
    
    public function laporan()
    {
        echo "OK";
    }





















    

   
    // public function laporan_observasi_pdf()
    // {
    //     if ($this->CI->router->fetch_class() != "login") {
    //         // session check logic here...change this accordingly
    //         if ($this->CI->session->userdata['level'] == 'pengelola') {
    //             redirect('Admin');
    //         } elseif ($this->CI->session->userdata['level'] == 'pihak_pusat') {
    //             redirect('Admin');
    //         }
    //     }
    //     $this->load->library('dompdf_gen');

    //     $tgl_awal = $this->input->post('dari');
    //     $tgl_akhir = $this->input->post('sampai');
    //     $data = [
    //         'awal' =>  $tgl_awal,
    //         'akhir' => $tgl_akhir,
    //         'logo' => '<img src="assets/img/Logo.png" width="30" alt="" class="mr-3">'
    //     ];
    //     $data['observasi'] = $this->Observasi_model->getbytgl($tgl_awal, $tgl_akhir);
    //     $this->load->view('admin/laporan/pdf/Observasi', $data);
    //     $paper_size = 'A4';
    //     $orientation = 'landscape';
    //     $html = $this->output->get_output();
    //     $html .=  '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">';
    //     $this->dompdf->set_paper($paper_size, $orientation);

    //     $this->dompdf->load_html($html);
    //     $this->dompdf->render();
    //     $this->dompdf->stream("laporan_observasi.pdf", ['Attachment' => 0]);
    // }

}
