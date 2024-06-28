<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/form_pelanggaran', 'Home::form_pelanggaran');
$routes->get('/tabel_pelanggaran', 'Home::tabel_pelanggaran');
$routes->get('/detail_pelanggaran', 'Home::detail_pelanggaran');
$routes->get('/edit_pelanggaran', 'Home::edit_pelanggaran');

$routes->get('/', 'Auth::login');
$routes->post('/login-proses', 'Auth::login_proses');

$routes->get('/', 'LandingPage::index');

//perizinan 
$routes->get('/', 'Perizinan::index');
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/about', 'Home::about');
$routes->get('/form_perizinan', 'Perizinan::form_perizinan');
$routes->get('/tabel_perizinan', 'Perizinan::tabel_perizinan');
$routes->get('/edit_perizinan/(:num)', 'Perizinan::edit_perizinan/$1');
$routes->post('/perizinan/tambah_perizinan', 'Perizinan::tambah_perizinan');
$routes->post('/perizinan/update_perizinan', 'Perizinan::update_perizinan');
$routes->get('/delete_perizinan/(:num)', 'Perizinan::delete_perizinan/$1');
$routes->get('/cetak_perizinan_pdf', 'Perizinan::cetak_perizinan_pdf');
