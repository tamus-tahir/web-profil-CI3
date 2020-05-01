<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Counter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Default_m');
        security();
    }

    public function index()
    {
        $data['title'] = 'Data Counter';
        $data['counter'] = $this->Default_m->getAll('tabel_counter', 'id_counter')->result();
        $data['num'] = $this->Default_m->getAll('tabel_counter', 'id_counter')->num_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('counter/index', $data);
        $this->load->view('templates/foot');
    }

    public function form($id_counter = null)
    {
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('angka', 'angka', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Form Data Counter';

            if ($id_counter) {
                $where = ['id_counter' => $id_counter];
                $data['ubah'] = $this->Default_m->getWhere('tabel_counter', $where)->row();
            }

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('counter/form', $data);
            $this->load->view('templates/foot');
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'angka' => $this->input->post('angka'),
                'icon' => $this->input->post('icon')
            ];
            if ($id_counter) {
                $where = ['id_counter' => $id_counter];
                $this->Default_m->update('tabel_counter', $where, $data);
                $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
            } else {
                $this->Default_m->insert('tabel_counter', $data);
                $this->session->set_flashdata('flash', 'Data Berhasil Ditambahkan');
            }
            redirect('counter');
        }
    }

    public function hapus($id_counter)
    {
        $where = ['id_counter' => $id_counter];
        $this->Default_m->delete('tabel_counter', $where);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
            redirect('counter');
        }
    }
}
