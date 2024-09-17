<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// buku
$routes->get('/', 'Buku::index');
$routes->get('/buku', 'Buku::tampil'); // artinya kode diatas adalah untuk menyabungkan controller dan method 
$routes->get('/tambuah', 'Buku::TAMBAH'); // bacanya /tambuah itu nama routes/ url nya , terus Buku itu nama controllernya TAMBAH itu function yang ada didalam controller
$routes->post('/simpan', 'Buku::simpan');
$routes->get('/tampil', 'Buku::tampil');
$routes->post('/delete', 'Buku::hapus');
$routes->post('/edit', 'Buku::EDIT');
$routes->post('/tidey', 'Buku::tide'); // get= menampilkan, post= untuk menambahkan 

//peminjaman
$routes->get('/peminjaman1', 'Peminjaman::tampil');
$routes->get('/add', 'Peminjaman::TAMBAH');
$routes->post('/save', 'Peminjaman::simpan');
$routes->get('/show', 'Peminjaman::tampil');
$routes->post('/hapus', 'Peminjaman::hapus');
$routes->post('/rombak', 'Peminjaman::EDIT');
$routes->post('/edits', 'Peminjaman::tide');

//user
$routes->get('/user1', 'User::terlihat'); // Menampilkan daftar pengguna
$routes->post('/masuk', 'User::Nambah'); // Periksa fungsi ini di controller
$routes->get('/masuk', 'User::Nambah'); // Periksa fungsi ini di controller
$routes->post('/simpans', 'User::simvan'); // Menyimpan data pengguna baru
$routes->post('/hapos', 'User::havus'); // Menghapus pengguna
$routes->post('/ganti', 'User::TIDE'); // Memperbarui data pengguna
$routes->post('/eduit', 'User::edit'); // Periksa fungsi ini di controller
$routes->get('/tamvil', 'User::tampils');

//pengembalian
$routes->get('/pengembalian1', 'Pengembalian::index'); // Menampilkan daftar pengguna
$routes->post('/masux', 'Pengembalian::TAMBAH'); // Periksa fungsi ini di controller
$routes->get('/masux', 'Pengembalian::TAMBAH'); // Periksa fungsi ini di controller
$routes->get('/simpanz', 'Pengembalian::simpan'); // Menyimpan data pengguna baru
$routes->post('/simpanz', 'Pengembalian::simpan'); // Menyimpan data pengguna baru
$routes->post('/havus', 'Pengembalian::hapus'); // Menghapus pengguna
$routes->post('/gantiy', 'Pengembalian::tide'); // Memperbarui data pengguna
$routes->post('/eduitz', 'Pengembalian::EDIT'); // Periksa fungsi ini di controller
$routes->post('/tampilz', 'Pengembalian::tampil');
