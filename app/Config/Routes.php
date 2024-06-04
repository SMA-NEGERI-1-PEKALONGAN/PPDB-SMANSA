<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'landingPageController::index');

$routes->get('Antrean', 'landingPageController::Antrian');

$routes->get('Cari', 'landingPageController::Cari');

$routes->post('search', 'landingPageController::search');

$routes->get('views', 'landingPageController::view');

$routes->get('fetchAntrian', 'landingPageController::fetchAntrian');

$routes->get('fetchNotifikasi', 'landingPageController::fetchNotifikasi');

$routes->post('updateNotifikasi', 'landingPageController::updateNotifikasi');

// auth route
$routes->group('Auth', function ($routes) {
        $routes->get('/', 'Auth::index');
        $routes->post('login', 'Auth::login');
        $routes->get('logout', 'Auth::logout');
    });
    

// group route admin
$routes->group('Admin', function ($routes) {
    $routes->get('Dashboard', 'Home::index');
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
        $routes->post('reset', 'usersController::reset');
        $routes->post('changeStatus', 'usersController::changeStatus');
    });

    $routes->group('Antrian', function ($routes) {
        $routes->get('/', 'antrianController::index');
        $routes->get('DataTables', 'antrianController::ajaxDataTables');
        $routes->post('save', 'antrianController::store');
        $routes->post('delete', 'antrianController::destroy');
        $routes->post('edit', 'antrianController::edit');
        $routes->post('update', 'antrianController::update');
        $routes->get('scan', 'antrianController::scan');
        $routes->post('changeStatus', 'antrianController::changeStatus');
        $routes->post('checkIn', 'antrianController::checkIn');
        $routes->post('ubahAntrian', 'antrianController::ubahAntrian');
        $routes->get('List', 'antrianController::listAntrian');
        $routes->get('ListAntrian', 'antrianController::ajaxListAntrian');
        $routes->get('nextAntrian', 'antrianController::nextAntrian');
        $routes->post('addNotifikasi', 'antrianController::addNotifikasi');
        $routes->get('AjaxAntrianNotActive', 'antrianController::AjaxAntrianNotActive');
    });

});


    