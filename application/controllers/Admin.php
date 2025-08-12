<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#[\AllowDynamicProperties]

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Flyer_model');
        $this->load->model('Kategori_model');
        $this->load->library('session');
        $this->load->helper(['url', 'form']);
    }

    // Dashboard
    public function dashboard()
    {
        $data['total_flyer'] = $this->Flyer_model->count_all();
        $data['total_kategori'] = $this->Kategori_model->count_all();
        $this->load->view('admin/dashboard', $data);
    }

    // List flyer
    public function index()
    {
        $data['flyers'] = $this->Flyer_model->get_all();
        $this->load->view('admin/flyer/index', $data);
    }

    // Tambah flyer
    public function tambah()
    {
        if ($this->input->post()) {
            $upload_data = null;

            if (!empty($_FILES['gambar']['name'])) {
                $config['upload_path']   = './uploads/flyer/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size']      = 2048;
                $config['file_name']     = time() . '_' . $_FILES['gambar']['name'];

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $upload_data = $this->upload->data();
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('admin/tambah');
                }
            }

            $data = [
                'nama_flyer'   => $this->input->post('nama_flyer'),
                'id_kategori'  => $this->input->post('id_kategori'),
                'gambar'       => $upload_data ? $upload_data['file_name'] : null,
                'tgl_mulai'=> $this->input->post('tgl_mulai'),
                'tgl_selesai'=> $this->input->post('tgl_selesai'),
                'status'       => $this->input->post('status')
            ];

            $this->Flyer_model->insert($data);
            redirect('admin');
        }

        $data['kategori'] = $this->Kategori_model->get_all();
        $this->load->view('admin/flyer/tambah', $data);
    }

    // Edit flyer
    public function edit($id)
    {
        $data['flyer'] = $this->Flyer_model->get_by_id($id);
        if (!$data['flyer']) {
            show_404();
        }

        if ($this->input->post()) {
            $upload_data = null;

            if (!empty($_FILES['gambar']['name'])) {
                $config['upload_path'] = FCPATH . 'uploads/flyer/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size']      = 2048;
                $config['file_name']     = time() . '_' . $_FILES['gambar']['name'];

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $upload_data = $this->upload->data();
                    if (!empty($data['flyer']->gambar) && file_exists('./uploads/flyer/' . $data['flyer']->gambar)) {
                        unlink('./uploads/flyer/' . $data['flyer']->gambar);
                    }
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('admin/edit/' . $id);
                }
            }

            $update_data = [
                'nama_flyer'   => $this->input->post('nama_flyer'),
                'id_kategori'  => $this->input->post('id_kategori'),
                'tgl_mulai'=> $this->input->post('tgl_mulai'),
                'tgl_selesai'=> $this->input->post('tanggal_selesai'),
                'status'       => $this->input->post('status')
            ];

            if ($upload_data) {
                $update_data['gambar'] = $upload_data['file_name'];
            }

            $this->Flyer_model->update($id, $update_data);
            redirect('admin');
        }

        $data['kategori'] = $this->Kategori_model->get_all();
        $this->load->view('admin/flyer/edit', $data);
    }

    // Hapus flyer
    public function hapus($id)
    {
        $flyer = $this->Flyer_model->get_by_id($id);
        if ($flyer && !empty($flyer->gambar) && file_exists('./uploads/flyer/' . $flyer->gambar)) {
            unlink('./uploads/flyer/' . $flyer->gambar);
        }

        $this->Flyer_model->delete($id);
        redirect('admin');
    }
}