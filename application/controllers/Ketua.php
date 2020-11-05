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
            'penjualan' => $this->Penjualan_model->getAllPenjualan()
        ];
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_mobile');
        $this->load->view('templates/sidebar_ketua');
        $this->load->view('templates/topbar');
        $this->load->view('ketua/penjualan_sampah/index');
        $this->load->view('templates/footer');
    }

    public function profile()
    {
        $data = [
            'title' => 'Ketua | Update Profile',
            'users' => $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array(),
        ];

        $old_image = $data["users"]["gambar_users"];

        $this->form_validation->set_rules('name', 'nama', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('rt_users', 'rt', 'required');
        $this->form_validation->set_rules('rw_users', 'rw', 'required');
        $this->form_validation->set_rules('alamat_users', 'alamat', 'required');
        $this->form_validation->set_rules('telepon_users', 'telepon', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/header_mobile');
            $this->load->view('templates/sidebar_ketua');
            $this->load->view('templates/topbar');
            $this->load->view('ketua/profile/index');
            $this->load->view('templates/footer');
        } else {

            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'rt_users' => $this->input->post('rt_users'),
                'rw_users' => $this->input->post('rw_users'),
                'alamat_users' => $this->input->post('alamat_users'),
                'telepon_users' => $this->input->post('telepon_users'),
            ];

            $upload_image = $_FILES['gambar_users']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['upload_path'] = './assets/images/users/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar_users')) {
                    if ($old_image != 'default-user-image.jpg') {
                        unlink(FCPATH . 'assets/images/users/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar_users', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->where('email', $this->input->post('email'));
            $this->db->update('tbl_users', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Profile Berhasil Diubah!</div>');
            redirect('ketua/profile');
        }
    }
}