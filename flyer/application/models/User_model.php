<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#[\AllowDynamicProperties]

class User_model extends CI_Model {

    private $table = 'kategori';

    public function get_all_user()
    {
        return $this->db->get($this->table)->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where($this->table, ['id_kategori' => $id])->row();
    }

    public function get_flyer_by_kategori($id_kategori)
    {
        $this->db->select('flyer.*, kategori.nama_kategori');
        $this->db->from('flyer');
        $this->db->join('kategori', 'kategori.id_kategori = flyer.id_kategori');
        $this->db->where('flyer.id_kategori', $id_kategori);
        return $this->db->get()->result();
    }
}
