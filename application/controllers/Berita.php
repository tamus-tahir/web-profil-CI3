<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Default_m');
        security();
    }

    public function index()
    {
        $data['title'] = 'Data Berita';
        $data['berita'] = $this->Default_m->getAll('tabel_berita', 'id_berita')->result();
        $data['num'] = $this->Default_m->getAll('tabel_berita', 'id_berita')->num_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('berita/index', $data);
        $this->load->view('templates/foot');
    }

    public function form($id_berita = null)
    {
        $this->form_validation->set_rules('isi', 'isi', 'required');
        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Form Berita';

            if ($id_berita) {
                $where = ['id_berita' => $id_berita];
                $data['ubah'] = $this->Default_m->getWhere('tabel_berita', $where)->row();
            }

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('berita/form', $data);
            $this->load->view('templates/foot');
        } else {
            $path = './assets/uploads/berita/';
            $type = 'jpg|jpeg|png';
            $size = 500;
            $name = 'imgberita';
            $imgberitaold = $this->input->post('imgberitaold');
            $penulis = $this->session->userdata('nama_user');

            if ($id_berita) {
                $data = [
                    'judul' => $this->input->post('judul'),
                    'penulis' => $penulis,
                    'isi' => $this->input->post('isi'),
                    'imgberita' => !empty($_FILES[$name]["name"]) ?  $this->Default_m->upload($path, $type, $size, $name) : $imgberitaold
                ];
                $where = ['id_berita' => $id_berita];
                $this->Default_m->update('tabel_berita', $where, $data);
                if (!empty($_FILES[$name]["name"])) {
                    unlink($path . $imgberitaold);
                }
                $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
            } else {
                $data = [
                    'judul' => $this->input->post('judul'),
                    'penulis' => $penulis,
                    'isi' => $this->input->post('isi'),
                    'tanggal' => date('Y-m-d'),
                    'imgberita' => $this->Default_m->upload($path, $type, $size, $name)
                ];
                $this->Default_m->insert('tabel_berita', $data);
                $this->session->set_flashdata('flash', 'Data Berhasil Ditambahkan');
            }
            redirect('berita');
        }
    }

    public function hapus($id_berita)
    {
        $where = ['id_berita' => $id_berita];
        $berita = $this->Default_m->getWhere('tabel_berita', $where)->row();
        unlink('./assets/uploads/berita/' . $berita->imgberita);
        $this->Default_m->delete('tabel_berita', $where);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
            redirect('berita');
        }
    }

    function getAjax()
    {
        $where = ['id_berita' => $this->uri->segment(3)];
        $data['berita'] = $this->Default_m->getWhere('tabel_berita', $where)->row();
        $this->load->view('berita/detail', $data);
    }
}
