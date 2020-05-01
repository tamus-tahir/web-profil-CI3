<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Default_m');
    }

    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('dashboard');
        }

        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'required|trim');
        $this->form_validation->set_error_delimiters('<div class="text-danger text-capitalize ml-2">', '</div>');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('login/index', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $where = ['username' => $username];
        $user = $this->Default_m->getWhere('tabel_user', $where)->row();

        if ($user) {
            if ($user->aktif == 'Yes') {
                if (password_verify($password, $user->password)) {
                    $data = [
                        'username' => $user->username,
                        'nama_user' => $user->nama_user,
                        'id_profil' => $user->id_profil,
                        'id_user' => $user->id_user
                    ];

                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('flash', 'Selamat ' . $user->nama_user . ' Anda Berhasil Login');
                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata('error', 'Password Salah');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('error', 'Akun anda tidak aktif');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('error', 'Username Tidak Terdaftar');
            redirect('login');
        }
    }

    public function logout()
    {
        $data = ['username', 'id_profil', 'id_user', 'nama_user'];
        $this->session->unset_userdata($data);
        $this->session->set_userdata('');
        $this->session->set_flashdata('flash', 'Logout Berhasil');
        redirect('login');
    }
}
