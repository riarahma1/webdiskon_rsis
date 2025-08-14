<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#[\AllowDynamicProperties]

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    // Halaman Kategori
    public function index()
    {
        $data['kategori'] = $this->User_model->get_all_user();
        $this->load->view('user/kategori', $data);
    }

    // Daftar flyer dalam kategori
    public function promo($id_kategori)
    {
        $data['kategori'] = $this->User_model->get_by_id($id_kategori);
        $data['flyer'] = $this->User_model->get_flyer_by_kategori($id_kategori);
        $this->load->view('user/promo', $data);
    }

    // Detail flyer
    public function detail($id_flyer)
    {
        $this->load->model('Flyer_model');
        $data['flyer'] = $this->Flyer_model->get_by_id($id_flyer);
        $this->load->view('promo_detail', $data);
    }
}
