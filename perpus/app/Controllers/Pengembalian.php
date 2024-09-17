<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPengembalian;
use CodeIgniter\HTTP\ResponseInterface;
use DateTime;

class Pengembalian extends BaseController
{
    protected $pengembalian;
    // Harus dikasih construct supaya di controller lain tidak usah menulis satu2 new ModelBuku
    // langsung tulis $this
    public function __construct()
    {
        $this->pengembalian = new ModelPengembalian();
    }
    public function index()
    {
        $data = $this->pengembalian->getPengembalian();
        $hasil = [
            "ANGGUN" => $data
        ];
        //return view('layout/v_buku');
        return view('kembali/view_kembali', $hasil);
        // panggil folder layout file v_buku 
    }
    public function TAMBAH()
    {
        return view('kembali/tambah');
    }
    public function EDIT()
    {
        // untuk menampilkan data dari field yang diedit
        $data = [
            'PeminjamanID' => $this->request->getVar('PeminjamanID'),
            'UserID' => $this->request->getVar('UserID'),
            'BukuID' => $this->request->getVar('BukuID'),
            'Tanggal_pengembalian' => $this->request->getVar('Tanggal_pengembalian'),
        ];
        return view('kembali/edit', $data);
    }
    public function simpan()
    {
        $tanggalpengembalian = $this->request->getPost('Tanggal_pengembalian') ?? date('Y-m-d');
        $data = [
            'UserID' => $this->request->getVar('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'Tanggal_pengembalian' => $tanggalpengembalian,

        ];
        $this->pengembalian->insert($data);
        return redirect()->to('/pengembalian1');
    }
    public function hapus()
    {
        $id = $this->request->getPost('PeminjamanID');
        $this->pengembalian->delete($id);

        return redirect()->to('/pengembalian1');
    }
    public function tide()
    {
        $tanggalpengembalian = new \DateTime('now', new \DateTimeZone('Asia/Jakarta'));
        $id = $this->request->getPost("PeminjamanID");
        $data = [
            'UserID' => $this->request->getPost('UserID'),
            'BukuID' => $this->request->getPost('BukuID'),
            'Tanggal_peminjaman' => $tanggalpengembalian->format('Y-m-d'),
        ];

        // $this->peminjaman->where('PeminjamanID', $id);
        // $this->peminjaman->update($data);
        $this->pengembalian->update($id, $data);
        return redirect()->to('/pengembalian1');
    }
    public function register()
    {
        return view('layout/register');
    }
    public function user()
    {
        return view('kembali/index');
    }
}
