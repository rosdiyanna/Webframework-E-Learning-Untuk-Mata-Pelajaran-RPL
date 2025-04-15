<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ["as" => "home"]); // Halaman Home
$routes->get('about', 'About::index', ["as" => "about"]); // Halaman About Us
$routes->get('contact', 'Contact::index', ["as" => "contact"]); // Halaman contact
$routes->get('project', 'Project::index', ["as" => "project"]); // Halaman project
$routes->get('matapelajaran', 'MataPelajaran::index', ["as" => "matapelajaran"]); // Halaman Mata Pelajaran
$routes->get('materipemrogramandasar', 'materipemrogramandasar::index', ["as" => "materipemrogramandasar"]); // Halaman Materi Pemrograman Dasar
$routes->get('materibasisdata', 'materibasisdata::index', ["as" => "materibasisdata"]); // Halaman Materi Basis Data
$routes->get('materipbo', 'materipbo::index', ["as" => "materipbo"]); // Halaman Materi PBO
$routes->get('materipweb', 'materipweb::index', ["as" => "materipweb"]); // Halaman Materi Pemrograman Web
$routes->get('materippl', 'materippl::index', ["as" => "materippl"]); // Halaman Materi Pengembangan Perangkat Lunak
$routes->get('materiasj', 'materiasj::index', ["as" => "materiasj"]); // Halaman Materi Administrasi Sistem Jaringan
$routes->get('/forum', 'Forum::index', ['as' => 'forum.index']); // Menampilkan halaman utama forum (daftar semua diskusi)
$routes->get('/forum/create', 'Forum::create', ['as' => 'forum.create']); // Menampilkan form untuk membuat diskusi baru
$routes->post('/forum/store', 'Forum::store', ['as' => 'forum.store']); // Menyimpan data diskusi baru dari form ke database (proses POST)
$routes->get('/forum/detail/(:num)', 'Forum::detail/$1', ['as' => 'forum.detail']); // Menampilkan detail dari satu diskusi berdasarkan ID-nya, termasuk semua balasan
$routes->post('/forum/reply/(:num)', 'Forum::reply/$1', ['as' => 'forum.reply']); // Menyimpan balasan untuk diskusi dengan ID tertentu



// Jika ingin menangani halaman yang tidak ditemukan
$routes->set404Override(function () {
    return view('errors/html/error_404'); // Pastikan file ini ada di 'app/Views/errors/html/error_404.php'
});
