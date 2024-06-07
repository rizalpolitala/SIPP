<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/about', 'Home::about');
$routes->get('/form_pelanggaran', 'Home::form_pelanggaran');
$routes->get('/tabel_pelanggaran', 'Home::tabel_pelanggaran');
$routes->get('/detail_pelanggaran', 'Home::detail_pelanggaran');
$routes->get('/edit_pelanggaran', 'Home::edit_pelanggaran');

$routes->get('/login', 'Auth::login');

$routes->get('/', 'LandingPage::index');

$routes->get('/', 'Perizinan::index');
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/about', 'Home::about');
$routes->get('/form_perizinan', 'Perizinan::form_perizinan');
$routes->get('/tabel_perizinan', 'Perizinan::tabel_perizinan');
$routes->get('/edit_perizinan', 'Perizinan::edit_perizinan');
