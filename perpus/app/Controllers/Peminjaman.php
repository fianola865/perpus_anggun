<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPeminjaman;
use CodeIgniter\HTTP\ResponseInterface;

class Peminjaman extends BaseController
{
    protected $peminjaman;
    // Harus dikasih construct supaya di controller lain tidak usah menulis satu2 new ModelBuku
    // langsung tulis $this
    public function __construct()
    {
        $this->peminjaman = new ModelPeminjaman();
    }
    public function tampil()
    {
        $data = $this->peminjaman->getPeminjaman();
        $hasil = [
            "anggun" => $data
        ];
        //return view('layout/v_buku');
        return view('pinjam/view_pinjam', $hasil);
        // panggil folder layout file v_buku 
    }
    // controller untuk menampilkan halaman tambah
    public function TAMBAH()
    {
        return view('pinjam/tambah');
    }
    // controller untuk menampilkan halaman edit
    public function EDIT()
    {
        // untuk menampilkan data dari field yang diedit
        $data = [
            'PeminjamanID' => $this->request->getVar('PeminjamanID'),
            'UserID' => $this->request->getVar('UserID'),
            'BukuID' => $this->request->getVar('BukuID'),
            'TanggalPeminjaman' => $this->request->getVar('TanggalPeminjaman'),
            'TanggalPengembalian' => $this->request->getVar('TanggalPengembalian'),
            'StatusPeminjaman' => $this->request->getVar('StatusPeminjaman'),
        ];
        return view('pinjam/edit', $data);
    }

    public function simpan()
    {
        $tanggalpinjam = $this->request->getPost('TanggalPeminjaman') ?? date('Y-m-d');
        $data = [
            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'StatusPeminjaman' => $this->request->getPost('StatusPeminjaman'),
            'TanggalPeminjaman' => $tanggalpinjam,

        ];

        $this->peminjaman->insert($data);
        return redirect()->to('/show');
    }
    // controller untuk hapus data peminjaman
    public function hapus()
    {
        $id = $this->request->getPost('PeminjamanID');
        $this->peminjaman->delete($id);

        return redirect()->to('/show');
    }
    // controller untuk mengeksekusi edit data peminjaman
    public function tide()
    {
        $tanggalpinjam = $this->request->getPost('TanggalPeminjaman') ?? date('Y-m-d');
        $id = $this->request->getVar("PeminjamanID");
        $data = [
            'UserID' => $this->request->getVar('UserID'),
            'BukuID' => $this->request->getVar('BukuID'),
            'StatusPeminjaman' => $this->request->getVar('StatusPeminjaman'),
            'TanggalPeminjaman' => $tanggalpinjam,
        ];
        $this->peminjaman->update($data, ['PeminjamanID' => $id]);
        return redirect()->to('/show');
    }
    public function register()
    {
        return view('layout/register');
    }
    public function user()
    {
        return view('pinjam/index');
    }
}
