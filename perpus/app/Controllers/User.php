<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    protected $user;
    public function __construct()
    {
        $this->user = new ModelUser();
    }
    public function terlihat()
    {
        $data = $this->user->findAll();
        $hasil = [
            "dwi" => $data
        ];
        return view('user2/view_user', $hasil);
    }
    public function Nambah()
    {
        return view('user2/tambah');
    }
    public function tampils()
    {
        $data = $this->user->findAll();
        $hasil = [
            "dwi" => $data
        ];
        return view('user2/view_user', $hasil);
    }
    public function simvan()
    {
        $data = [
            'Username' => $this->request->getPost('Username'),
            'Password' => $this->request->getPost('Password'),
            'Email' => $this->request->getPost('Email'),
            'NamaLengkap' => $this->request->getPost('NamaLengkap'),
            'Alamat' => $this->request->getPost('Alamat'),
            'hak_akses' => $this->request->getPost('hak_akses'),
        ];
        $this->user->insert($data);
        return redirect()->to('/tampils');
    }
    public function havus()
    {
        $id = $this->request->getPost('UserID');
    }
    public function TIDE()
    {
        $id = $this->request->getPost('UserID');
        $data = [
            'Username' => $this->request->getPost('Username'),
            'Password' => $this->request->getPost('Password'),
            'Email' => $this->request->getPost('Email'),
            'NamaLengkap' => $this->request->getPost('NamaLengkap'),
            'Alamat' => $this->request->getPost('Alamat'),
            'hak_akses' => $this->request->getPost('hak_akses'),
        ];
        $this->user->update($id, $data);
        return redirect()->to('/user1');
    }
    public function edit()
    {
        $data = [
            'UserID' => $this->request->getPost('UserID'),
            'Username' => $this->request->getPost('Username'),
            'Password' => $this->request->getPost('Password'),
            'Email' => $this->request->getPost('Email'),
            'NamaLengkap' => $this->request->getPost('NamaLengkap'),
            'Alamat' => $this->request->getPost('Alamat'),
            'hak_akses' => $this->request->getPost('hak_akses'),

        ];
        return view('user2/edit', $data);
    }

    public function register()
    {
        return view('layout/register');
    }
    public function user()
    {
        return view('user2/view_user');
    }
}
