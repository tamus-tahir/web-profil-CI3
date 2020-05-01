<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Default_m');
        $this->load->model('App_m');
    }

    public function index()
    {
        $data['maintitle'] = 'Home';
        $data['config'] = $this->Default_m->getWhere('tabel_config', ['id_config' => 1])->row();
        $data['about'] = $this->Default_m->getWhere('tabel_about', ['id_about' => 1])->row();
        $data['counter'] = $this->Default_m->getAll('tabel_counter', 'id_counter')->result();
        $data['berita'] = $this->App_m->getBeritaHome()->result();

        $this->load->view('templates-user/header', $data);
        $this->load->view('templates-user/nav', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates-user/footer', $data);
    }

    public function about()
    {
        $data['maintitle'] = 'Home';
        $data['title'] = 'About Us';
        $data['about'] = $this->Default_m->getWhere('tabel_about', ['id_about' => 1])->row();

        $this->load->view('templates-user/header', $data);
        $this->load->view('templates-user/nav', $data);
        $this->load->view('home/about', $data);
        $this->load->view('templates-user/footer', $data);
    }

    public function blog()
    {
        $data['maintitle'] = 'Home';
        $data['title'] = 'Blog';

        $config['base_url'] = base_url('home/blog/');
        $config['total_rows'] = $this->Default_m->getAll('tabel_berita', 'id_berita')->num_rows();
        $config['per_page'] = 4;
        $this->pagination->initialize($config);
        $limit = $config['per_page'];
        $start = $this->uri->segment(3);

        $data['berita'] = $this->Default_m->getPagination('tabel_berita', 'id_berita', $limit, $start)->result();

        $this->load->view('templates-user/header', $data);
        $this->load->view('templates-user/nav', $data);
        $this->load->view('home/blog', $data);
        $this->load->view('templates-user/footer', $data);
    }

    public function detail($id_berita)
    {
        $data['maintitle'] = 'Home';
        $data['title'] = 'Blog';
        $where = ['id_berita' => $id_berita];
        $data['berita'] = $this->Default_m->getWhere('tabel_berita', $where)->row();

        $this->load->view('templates-user/header', $data);
        $this->load->view('templates-user/nav', $data);
        $this->load->view('home/detail', $data);
        $this->load->view('templates-user/footer', $data);
    }

    public function crew()
    {
        $data['maintitle'] = 'Home';
        $data['title'] = 'Crew';
        $data['crew'] = $this->App_m->getCrew('tabel_crew', 'urutan')->result();

        $this->load->view('templates-user/header', $data);
        $this->load->view('templates-user/nav', $data);
        $this->load->view('home/crew', $data);
        $this->load->view('templates-user/footer', $data);
    }

    public function contact()
    {
        $data['maintitle'] = 'Home';
        $data['title'] = 'Contact';

        $data['config'] = $this->Default_m->getWhere('tabel_config', ['id_config' => 1])->row();

        $this->load->view('templates-user/header', $data);
        $this->load->view('templates-user/nav', $data);
        $this->load->view('home/contact', $data);
        $this->load->view('templates-user/footer', $data);
    }
}
