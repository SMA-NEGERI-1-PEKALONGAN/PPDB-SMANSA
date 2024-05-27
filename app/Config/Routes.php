<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// group route admin
$routes->group('Admin', function ($routes) {
    // group route master kategori
    $routes->group('Kategori', function ($routes) {
        $routes->get('DataTables', 'masterKategori::ajaxDataTables');
        $routes->post('saveKategori', 'masterKategori::store');
        $routes->post('deleteKategori', 'masterKategori::destroy');
    });
    $routes->group('Referensi', function ($routes) {
        $routes->get('/', 'masterReferensi::index');
    });
});