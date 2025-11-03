<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Muat model prodi
        $this->load->model('Prodi_model');
    }

    // Tampilkan semua data prodi (Read)
    public function index()
    {
        $data['prodi'] = $this->Prodi_model->lihatData();
        // KOREKSI LOKASI VIEW: Tambahkan 'prodi/'
        $this->load->view('prodi/prodi_view', $data);
    }

    // Fungsi untuk memuat view form tambah
    public function tambah()
    {
        // KOREKSI LOKASI VIEW: Tambahkan 'prodi/'
        $this->load->view('prodi/prodi_tambah');
    }

    // Fungsi untuk menyimpan data baru (Create)
    public function simpan()
    {
        $data = [
            'kode_prodi' => $this->input->post('kode_prodi'),
            'nama_prodi' => $this->input->post('nama_prodi')
        ];
        $this->Prodi_model->simpan($data);
        redirect('prodi');
    }

    // Fungsi untuk memuat data prodi ke form edit
    public function edit($id)
    {
        // Ambil data berdasarkan id_prodi
        $data['prodi'] = $this->Prodi_model->getById($id);
        // KOREKSI LOKASI VIEW: Tambahkan 'prodi/'
        $this->load->view('prodi/prodi_edit', $data);
    }

    // Fungsi untuk memproses update data (Update)
    public function perbaharui($id)
    {
        $data = [
            'kode_prodi' => $this->input->post('kode_prodi'),
            'nama_prodi' => $this->input->post('nama_prodi')
        ];

        // Kirim data dan ID ke Model untuk diupdate
        $this->Prodi_model->perbaharui($id, $data);
        redirect('prodi');
    }

    // Fungsi untuk menghapus data (Delete)
    public function hapus($id)
    {
        $this->Prodi_model->hapus($id);
        redirect('prodi');
    }
}
