<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#[\AllowDynamicProperties]

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load model dan library session
        $this->load->model('Admin_model');
        $this->load->library('session');
        $this->load->helper(['url', 'form']);
    }

    public function login()
    {
        if ($this->input->post()) {
            $username = $this->input->post('username', TRUE);
            $password = $this->input->post('password', TRUE);

            $admin = $this->Admin_model->cek_login($username, $password);

            if ($admin) {
                // Set data session
                $this->session->set_userdata([
                    'admin_id' => $admin->id,
                    'username' => $admin->username,
                    'logged_in' => TRUE
                ]);

                redirect('admin/dashboard');
            } else {
                $data['error'] = 'Username atau password salah';
                $this->load->view('auth/login', $data);
                return;
            }
        }

        $this->load->view('auth/login');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}