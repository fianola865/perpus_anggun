<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelBuku;
use CodeIgniter\HTTP\ResponseInterface;

class Buku extends BaseController
{
    protected $buku;
    // index ini adalah method yang akan dipanggil ke routes
    public function __construct()
    {
        $this->buku = new ModelBuku();
        // Harus dikasih construct supaya di controller lain tidak usah menulis satu2 new ModelBuku
        // langsung tulis $this
    }
    public function index()
    {
        $data = $this->buku->findAll();
        $hasil = [
            "anggun" => $data
        ];
        //return view('layout/v_buku');
        return view('users/index', $hasil);
        // panggil folder layout file v_buku 
    }
    // controller untuk menampilkan halaman tambah
    public function TAMBAH()
    {
        return view('users/tambah');
    }
    // controller untuk menampilkan halaman edit
    public function EDIT()
    {
        // untuk menampilkan data dari field yang diedit
        $data = [
            'id_buku' => $this->request->getPost('id_buku'),
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ];
        return view('users/edit', $data);
    }
    // controller untuk menampilkan semua tampilan(read)
    public function tampil()
    {
        $data = $this->buku->findAll();
        $hasil = [
            "anggun" => $data
        ];
        return view('users/index', $hasil);
    }
    // controller untuk menambahkan data
    public function simpan()
    {

        $data = [
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ];

        $this->buku->insert($data);
        return redirect()->to('/tampil');
    }
    // controller untuk hapus data buku
    public function hapus()
    {
        $id = $this->request->getPost('id_buku');
        $this->buku->delete($id);

        return redirect()->to('/tampil');
    }
    // controller untuk mengeksekusi edit data buku
    public function tide()
    {
        $id = $this->request->getVar("id_buku");
        $data = [
            'judul' => $this->request->getVar('judul'),
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'tahun_terbit' => $this->request->getVar('tahun_terbit'),
        ];
        $this->buku->update($id, $data);

        return redirect()->route('/');
    }
    public function register()
    {
        return view('layout/register');
    }
    public function user()
    {
        return view('users/index');
    }
}
// return redirect untuk mengarahkan tombol ke halaman selanjutnya biasanya kan menggunakna a href 
// dan arahkan ke file yang dituju tetapi  kalau memakai form tidak bisa , harus menggunakan button
// buat tombol button seperti biasanya dan buat return redirect di controller 
