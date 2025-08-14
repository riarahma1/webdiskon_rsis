<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#[\AllowDynamicProperties]

class Admin_model extends CI_Model {
    public function cek_login($username, $password) {
        return $this->db->get_where('admin', [
            'username' => $username,
            'password' => $password // plain text sementara
        ])->row();
    }
}