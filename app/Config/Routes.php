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
        $routes->get('DataTables', 'masterKategoriController::ajaxDataTables');
        $routes->post('saveKategori', 'masterKategoriController::store');
        $routes->post('deleteKategori', 'masterKategoriController::destroy');
        $routes->post('editKategori', 'masterKategoriController::edit');
        $routes->post('updateKategori', 'masterKategoriController::update');
    });
    $routes->group('Referensi', function ($routes) {
        $routes->get('/', 'masterReferensiController::index');
        $routes->get('DataTables', 'masterReferensiController::ajaxDataTables');
    });
});