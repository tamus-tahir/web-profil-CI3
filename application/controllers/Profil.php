<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Default_m');
        security();
    }

    public function index($id_profil = null)
    {
        $this->form_validation->set_rules('profil', 'profil', 'required');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE) {

            if ($id_profil) {
                $where = ['id_profil' => $id_profil];
                $data['ubah'] = $this->Default_m->getWhere('tabel_profil', $where)->row();
            }

            $data['title'] = 'Data Profil';
            $data['profil'] = $this->Default_m->getAll('tabel_profil', 'id_profil')->result();
            $data['num'] = $this->Default_m->getAll('tabel_profil', 'id_profil')->num_rows();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('profil/index', $data);
            $this->load->view('templates/foot');
        } else {
            $data = ['profil' => $this->input->post('profil')];
            if ($id_profil) {
                $where = ['id_profil' => $id_profil];
                $this->Default_m->update('tabel_profil', $where, $data);
                $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
            } else {
                $this->Default_m->insert('tabel_profil', $data);
                $this->session->set_flashdata('flash', 'Data Berhasil Ditambahkan');
            }
            redirect('profil');
        }
    }

    public function hapus($id_profil)
    {
        $where = ['id_profil' => $id_profil];
        $num = $this->Default_m->getWhere('tabel_user', $where)->num_rows();

        if ($num > 0) {
            $this->session->set_flashdata('error', 'Data Profil Sedang Digunakan');
        } else {
            $this->Default_m->delete('tabel_profil', $where);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
            }
        }
        redirect('profil');
    }

    public function akses($id_profil)
    {
        $data['menu'] = $this->Default_m->getAll('tabel_menu', 'id_menu')->result();

        $where = ['id_profil' => $id_profil];
        $data['profil'] = $this->Default_m->getWhere('tabel_profil', $where)->row();

        $data['title'] = 'Data Akses';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('profil/akses', $data);
        $this->load->view('templates/foot');
    }

    public function changeaccess()
    {
        $id_profil = $this->input->post('id_profil');
        $id_menu = $this->input->post('id_menu');

        $data = [
            'id_profil' => $id_profil,
            'id_menu' => $id_menu
        ];

        $result = $this->db->get_where('tabel_akses', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('tabel_akses', $data);
        } else {
            $this->db->delete('tabel_akses', $data);
        }

        $this->session->set_flashdata('flash', 'Akses Berhasil Diubah');
    }
}
