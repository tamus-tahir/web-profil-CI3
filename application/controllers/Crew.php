<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crew extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Default_m');
        security();
    }

    public function index()
    {
        $data['title'] = 'Data Crew';
        $data['crew'] = $this->Default_m->getAll('tabel_crew', 'id_crew')->result();
        $data['num'] = $this->Default_m->getAll('tabel_crew', 'id_crew')->num_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('crew/index', $data);
        $this->load->view('templates/foot');
    }

    public function form($id_crew = null)
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required');
        $this->form_validation->set_rules('urutan', 'urutan', 'required');
        $this->form_validation->set_rules('facebook', 'facebook', 'required');
        $this->form_validation->set_rules('instagram', 'instagram', 'required');
        $this->form_validation->set_rules('twitter', 'twitter', 'required');
        $this->form_validation->set_rules('youtube', 'youtube', 'required');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Form crew';

            if ($id_crew) {
                $where = ['id_crew' => $id_crew];
                $data['ubah'] = $this->Default_m->getWhere('tabel_crew', $where)->row();
            }

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('crew/form', $data);
            $this->load->view('templates/foot');
        } else {
            $path = './assets/uploads/crew/';
            $type = 'jpg|jpeg|png';
            $size = 500;
            $name = 'imgcrew';
            $imgcrewold = $this->input->post('imgcrewold');

            if ($id_crew) {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'jabatan' => $this->input->post('jabatan'),
                    'urutan' => $this->input->post('urutan'),
                    'facebook' => $this->input->post('facebook'),
                    'instagram' => $this->input->post('instagram'),
                    'twitter' => $this->input->post('twitter'),
                    'youtube' => $this->input->post('youtube'),
                    'imgcrew' => !empty($_FILES[$name]["name"]) ?  $this->Default_m->upload($path, $type, $size, $name) : $imgcrewold
                ];
                $where = ['id_crew' => $id_crew];
                $this->Default_m->update('tabel_crew', $where, $data);
                if (!empty($_FILES[$name]["name"])) {
                    unlink($path . $imgcrewold);
                }
                $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
            } else {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'jabatan' => $this->input->post('jabatan'),
                    'urutan' => $this->input->post('urutan'),
                    'facebook' => $this->input->post('facebook'),
                    'instagram' => $this->input->post('instagram'),
                    'twitter' => $this->input->post('twitter'),
                    'youtube' => $this->input->post('youtube'),
                    'imgcrew' => $this->Default_m->upload($path, $type, $size, $name)
                ];
                $this->Default_m->insert('tabel_crew', $data);
                $this->session->set_flashdata('flash', 'Data Berhasil Ditambahkan');
            }
            redirect('crew');
        }
    }

    public function hapus($id_crew)
    {
        $where = ['id_crew' => $id_crew];
        $crew = $this->Default_m->getWhere('tabel_crew', $where)->row();
        unlink('./assets/uploads/crew/' . $crew->imgcrew);
        $this->Default_m->delete('tabel_crew', $where);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
            redirect('crew');
        }
    }

    function getAjax()
    {
        $where = ['id_crew' => $this->uri->segment(3)];
        $data['crew'] = $this->Default_m->getWhere('tabel_crew', $where)->row();
        $this->load->view('crew/detail', $data);
    }
}
