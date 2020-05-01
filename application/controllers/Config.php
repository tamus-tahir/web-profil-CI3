<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Config extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Default_m');
        security();
    }

    public function index()
    {
        $this->form_validation->set_rules('webname', 'nama web', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim');
        $this->form_validation->set_rules('telpon', 'telpon', 'required|trim');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
        $this->form_validation->set_rules('copyright', 'copyright', 'required|trim');
        $this->form_validation->set_rules('facebook', 'facebook', 'required|trim');
        $this->form_validation->set_rules('instagram', 'instagram', 'required|trim');
        $this->form_validation->set_rules('twitter', 'twitter', 'required|trim');
        $this->form_validation->set_rules('youtube', 'youtube', 'required|trim');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE) {

            $data['title'] = 'Konfigurasi';
            $where = ['id_config' => 1];
            $data['ubah'] = $this->Default_m->getWhere('tabel_config', $where)->row();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('config/index', $data);
            $this->load->view('templates/foot');
        } else {
            $path = './assets/img/';
            $type = 'jpg|jpeg|png';
            $size = 500;
            $name = 'imgheader';
            $imgheaderold = $this->input->post('imgheaderold');
            $data = [
                'webname' => $this->input->post('webname'),
                'email' => $this->input->post('email'),
                'telpon' => $this->input->post('telpon'),
                'alamat' => $this->input->post('alamat'),
                'copyright' => $this->input->post('copyright'),
                'facebook' => $this->input->post('facebook'),
                'instagram' => $this->input->post('instagram'),
                'twitter' => $this->input->post('twitter'),
                'youtube' => $this->input->post('youtube'),
                'imgheader' => !empty($_FILES[$name]["name"]) ?  $this->Default_m->upload($path, $type, $size, $name) : $imgheaderold
            ];
            $where = ['id_config' => 1];
            $this->Default_m->update('tabel_config', $where, $data);
            if (!empty($_FILES[$name]["name"])) {
                unlink($path . $imgheaderold);
            }
            $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
            redirect('config');
        }
    }
}
