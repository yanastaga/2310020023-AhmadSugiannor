<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi_model extends CI_Model
{
    // Cek semua data prodi
    public function lihatData()
    {
        return $this->db->get('prodi')->result();
    }

    // Simpan (Create) data prodi baru
    public function simpan($data)
    {
        return $this->db->insert('prodi', $data);
    }

    // Ambil data prodi berdasarkan ID
    public function getById($id)
    {
        return $this->db->get_where('prodi', ['id_prodi' => $id])->row();
    }

    // Perbaharui (Update) data prodi
    public function perbaharui($id, $data)
    {
        return $this->db->update('prodi', $data, ['id_prodi' => $id]);
    }

    // Hapus (Delete) data prodi
    public function hapus($id)
    {
        return $this->db->delete('prodi', ['id_prodi' => $id]);
    }
}
