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
