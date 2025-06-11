<?php

namespace App\Controllers;

use App\Models\KategoriProdukModel;

class KategoriProdukController extends BaseController
{
    protected $kategori;

    public function __construct()
    {
        $this->kategori = new KategoriProdukModel();
    }

    public function index()
    {
        $data['kategori'] = $this->kategori->findAll();
        return view('v_kategori_produk', $data);
    }

    public function create()
    {
        $dataForm = [
            'nama' => $this->request->getPost('nama_kategori'),
        ];

        if (empty($dataForm['nama'])) {
            return redirect()->to('/kategori-produk')->with('failed', 'Nama kategori tidak boleh kosong');
        }

        try {
            $this->kategori->insert($dataForm);
            return redirect()->to('/kategori-produk')->with('success', 'Kategori berhasil ditambahkan');
        } catch (\CodeIgniter\Database\Exceptions\DatabaseException $e) {
            log_message('error', $e->getMessage());
            return redirect()->to('/kategori-produk')->with('failed', 'Gagal menambahkan kategori: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $data['kategori'] = $this->kategori->find($id);
        if (!$data['kategori']) {
            return redirect()->to('/kategori-produk')->with('failed', 'Kategori tidak ditemukan');
        }
        return view('v_kategori_produk', $data);
    }

    public function update($id)
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
        ];


        if (empty($data['nama'])) {
            return redirect()->to('/kategori-produk')->with('failed', 'Nama kategori tidak boleh kosong');
        }

        try {
            $this->kategori->update($id, $data);
            return redirect()->to('/kategori-produk')->with('success', 'Kategori berhasil diupdate');
        } catch (\CodeIgniter\Database\Exceptions\DatabaseException $e) {
            log_message('error', $e->getMessage());
            return redirect()->to('/kategori-produk')->with('failed', 'Gagal mengupdate kategori: ' . $e->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            $this->kategori->delete($id);
            return redirect()->to('/kategori-produk')->with('success', 'Data berhasil dihapus!');
        } catch (\CodeIgniter\Database\Exceptions\DatabaseException $e) {
            log_message('error', $e->getMessage());
            return redirect()->to('/kategori-produk')->with('failed', 'Gagal menghapus kategori: ' . $e->getMessage());
        }
    }
}
