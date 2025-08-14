<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#[\AllowDynamicProperties]

class Flyer_model extends CI_Model {

    private $table = 'flyer';

    public function get_all_flyer()
    {
    $this->db->select('flyer.*, kategori.nama_kategori');
    $this->db->from('flyer');
    $this->db->join('kategori', 'kategori.id_kategori = flyer.id_kategori');
        return $this->db->get()->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where($this->table, ['id_flyer' => $id])->row();
    }

    public function insert($data) {
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data) {
        return $this->db->where('id_flyer', $id)->update($this->table, $data);
    }

    public function delete($id) {
        return $this->db->delete($this->table, ['id_flyer' => $id]);
    }

    public function count_all() {
        return $this->db->count_all($this->table);
    }
}