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
        $routes->get('fetch', 'masterKategoriController::fetchKategori');
        $routes->get('DataTables', 'masterKategoriController::ajaxDataTables');
        $routes->post('save', 'masterKategoriController::store');
        $routes->post('delete', 'masterKategoriController::destroy');
        $routes->post('edit', 'masterKategoriController::edit');
        $routes->post('update', 'masterKategoriController::update');
    });
    $routes->group('Referensi', function ($routes) {
        $routes->get('/', 'masterReferensiController::index');
        $routes->get('DataTables', 'masterReferensiController::ajaxDataTables');
        $routes->post('save', 'masterReferensiController::store');
        $routes->post('delete', 'masterReferensiController::destroy');
        $routes->post('edit', 'masterReferensiController::edit');
        $routes->post('update', 'masterReferensiController::update');
        $routes->get('fetchKodeKategori/(:segment)', 'masterReferensiController::fetchKodeKategori/$1');
    });
    $routes->group('User', function ($routes) {
        $routes->get('/', 'usersController::index');
        $routes->get('DataTables', 'usersController::ajaxDataTables');
        $routes->post('save', 'usersController::store');
        $routes->post('delete', 'usersController::destroy');
        $routes->post('edit', 'usersController::edit');
        $routes->post('update', 'usersController::update');
    });
});