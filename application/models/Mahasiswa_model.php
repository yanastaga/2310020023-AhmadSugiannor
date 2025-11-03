<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{

    function lihatData()
    {
        // return $this->db->get('mahasiswa')->result();
        $this->db->select('mahasiswa.*, prodi.nama_prodi');
        $this->db->from('mahasiswa');
        $this->db->join('prodi', 'mahasiswa.id_prodi = prodi.id_prodi', 'left');
        $query = $this->db->get();
        return $query->result();
    }

    public function metodeRow($id)
    {
        // return $this->db->where('id_mahasiswa', 1)->get('mahasiswa')->row();

        $query = $this->db->where('id_mahasiswa', $id);
        $query = $this->db->get('mahasiswa');
        return $query->row();
    }

    public function metodeResultArray()
    {
        return $this->db->get('mahasiswa')->result_array();
    }

    public function simpan($data)
    {
        return $this->db->insert('mahasiswa', $data);
    }

    public function getById($id)
    {
        $query = $this->db->get_where('mahasiswa', ['id_mahasiswa' => $id]);
        return $query->row();
    }


    public function get_prodi()
    {
        // Mengambil semua data dari tabel 'prodi'
        return $this->db->get('prodi')->result();
    }

    public function perbaharui($id, $data)
    {
        return $this->db->update('mahasiswa', $data, ['id_mahasiswa' => $id]);
    }

    public function hapus($id)
    {
        return $this->db->delete('mahasiswa', ['id_mahasiswa' => $id]);
    }
}
