<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#[\AllowDynamicProperties]

class Kategori extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model');
    }

    // List semua kategori
    public function index()
    {
        $data['kategori'] = $this->Kategori_model->get_all();
        $this->load->view('admin/kategori/index', $data);
    }

    // Tambah kategori
    public function tambah()
    {
        if ($this->input->post()) {
            $data = [
                'nama_kategori' => $this->input->post('nama_kategori'),
                'nomor_urut' => $this->input->post('nomor_urut'),
                'status'       => $this->input->post('status')
            ];
            $this->Kategori_model->insert($data);
            redirect('kategori');
        }
        $this->load->view('admin/kategori/tambah');
    }

    // Edit kategori
    public function edit($id)
    {
        $data['kategori'] = $this->Kategori_model->get_by_id($id);

        if (!$data['kategori']) {
            show_404();
        }

        if ($this->input->post()) {
            $update_data = [
                'nama_kategori' => $this->input->post('nama_kategori'),
                'nomor_urut' => $this->input->post('nomor_urut'),
                'status'       => $this->input->post('status')
            ];
            $this->Kategori_model->update($id, $update_data);
            redirect('kategori');
        }

        $this->load->view('admin/kategori/edit', $data);
    }

    // Hapus kategori
    public function hapus($id)
    {
        $this->load->database();
        $cek_flyer = $this->db->get_where('flyer', ['id_kategori' => $id])->num_rows();

        if ($cek_flyer > 0) {
            echo "<script>
                    alert('Kategori tidak bisa dihapus karena masih dipakai di data flyer!');
                    window.location.href = '" . site_url('kategori') . "';
                </script>";
            return;
        }
        $this->Kategori_model->delete($id);
        redirect('kategori');
    }
}