<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ["as" => "home"]); // Halaman Home
$routes->get('about', 'About::index', ["as" => "about"]); // Halaman About Us
$routes->get('contact', 'Contact::index', ["as" => "contact"]);
$routes->get('project', 'Project::index', ["as" => "project"]);
$routes->get('team', 'Team::index', ["as" => "team"]);
$routes->get('testimonial', 'Testimonial::index', ["as" => "testimonial"]);
$routes->get('matapelajaran', 'MataPelajaran::index', ["as" => "matapelajaran"]); // Halaman Mata Pelajaran
$routes->get('materipemrogramandasar', 'materipemrogramandasar::index', ["as" => "materipemrogramandasar"]); // Halaman Materi Pemrograman Dasar
$routes->get('materibasisdata', 'materibasisdata::index', ["as" => "materibasisdata"]); // Halaman Materi Basis Data
$routes->get('materipbo', 'materipbo::index', ["as" => "materipbo"]); // Halaman Materi PBO
$routes->get('materipweb', 'materipweb::index', ["as" => "materipweb"]); // Halaman Materi Pemrograman Web
$routes->get('materippl', 'materippl::index', ["as" => "materippl"]); // Halaman Materi Pengembangan Perangkat Lunak
$routes->get('materiasj', 'materiasj::index', ["as" => "materiasj"]); // Halaman Materi Administrasi Sistem Jaringan
$routes->get('/', 'Forum::index');
$routes->get('forum', 'Forum::index');
$routes->get('forum/add', 'Forum::add');
$routes->post('forum/add', 'Forum::add');
$routes->get('forum/view/(:num)', 'Forum::view/$1');
$routes->post('forum/add_comment/(:num)', 'Forum::add_comment/$1');


// Jika ingin menangani halaman yang tidak ditemukan
$routes->set404Override(function () {
    return view('errors/html/error_404'); // Pastikan file ini ada di 'app/Views/errors/html/error_404.php'
});
