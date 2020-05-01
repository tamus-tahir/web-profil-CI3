<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Default_m');
        security();
    }

    public function index()
    {
        $this->form_validation->set_rules('about', 'about', 'required|trim');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE) {

            $data['title'] = 'About Us';
            $where = ['id_about' => 1];
            $data['ubah'] = $this->Default_m->getWhere('tabel_about', $where)->row();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('about/index', $data);
            $this->load->view('templates/foot');
        } else {
            $path = './assets/img/';
            $type = 'jpg|jpeg|png';
            $size = 500;
            $name = 'imgabout';
            $imgaboutold = $this->input->post('imgaboutold');
            $data = [
                'about' => $this->input->post('about'),
                'imgabout' => !empty($_FILES[$name]["name"]) ?  $this->Default_m->upload($path, $type, $size, $name) : $imgaboutold
            ];
            $where = ['id_about' => 1];
            $this->Default_m->update('tabel_about', $where, $data);
            if (!empty($_FILES[$name]["name"])) {
                unlink($path . $imgaboutold);
            }
            $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
            redirect('about');
        }
    }
}
