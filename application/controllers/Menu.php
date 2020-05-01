<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Default_m');
        security();
    }

    public function index()
    {
        $data['title'] = 'Data Menu';
        $data['menu'] = $this->Default_m->getAll('tabel_menu', 'id_menu')->result();
        $data['num'] = $this->Default_m->getAll('tabel_menu', 'id_menu')->num_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/index', $data);
        $this->load->view('templates/foot');
    }

    public function form($id_menu = null)
    {
        $this->form_validation->set_rules('menu', 'menu', 'required');
        $this->form_validation->set_rules('url', 'url', 'required');
        $this->form_validation->set_rules('urutan', 'urutan', 'required');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Form Data Menu';

            if ($id_menu) {
                $where = ['id_menu' => $id_menu];
                $data['ubah'] = $this->Default_m->getWhere('tabel_menu', $where)->row();
            }

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/form', $data);
            $this->load->view('templates/foot');
        } else {
            $data = [
                'menu' => $this->input->post('menu'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'dropdown' => $this->input->post('dropdown'),
                'urutan' => $this->input->post('urutan'),
                'aktif' => $this->input->post('aktif')
            ];
            if ($id_menu) {
                $where = ['id_menu' => $id_menu];
                $this->Default_m->update('tabel_menu', $where, $data);
                $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
            } else {
                $this->Default_m->insert('tabel_menu', $data);
                $this->session->set_flashdata('flash', 'Data Berhasil Ditambahkan');
            }
            redirect('menu');
        }
    }

    public function hapus($id_menu)
    {
        $where = ['id_menu' => $id_menu];
        $this->Default_m->delete('tabel_menu', $where);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
            redirect('menu');
        }
    }
}
