<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'landingPageController::index');

$routes->get('Pengumuman', 'landingPageController::Pengumuman');

$routes->get('FORM-DU', 'landingPageController::Form');

$routes->get('Antrean', 'landingPageController::Antrian');

$routes->get('Cari', 'landingPageController::Cari');

$routes->post('search_antrian', 'landingPageController::search_antrian');

$routes->get('Views', 'landingPageController::Views');

$routes->get('getAllDataAntrian', 'landingPageController::getAllDataAntrian');

$routes->get('fetchNotifikasi', 'landingPageController::fetchNotifikasi');

$routes->post('updateNotifikasi', 'landingPageController::updateNotifikasi');

$routes->get('fect_total_antrian', 'landingPageController::fect_total_antrian');    

$routes->get('fetchFilterAntrean', 'landingPageController::getDataFormAntrean');

$routes->get('fetchFilterPengumuman', 'landingPageController::getDataPengumuman');

$routes->get('printAntrean/(:segment)', 'landingPageController::printAntrean/$1');

$routes->get('DataTablesDataSiswa', 'dataSiswaController::ajaxDataTables');

$routes->post('fetchChatResponse', 'chatBotController::fetchResponse');

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
        $routes->get('fetchActiveSesi', 'masterReferensiController::fetchActiveSesi');
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
        $routes->post('fetchDataUser', 'usersController::fetchDataUser');
        $routes->post('updatePass', 'usersController::updatePass');
    });

    $routes->group('Antrian', function ($routes) {
        $routes->get('/', 'antrianController::index');
        $routes->get('DataTables', 'antrianController::ajaxDataTables');
        $routes->post('save', 'antrianController::store');
        $routes->post('saveAntrian', 'antrianController::saveAntrian');
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
        $routes->get('AjaxAntrianBermasalah', 'antrianController::AjaxAntrianBermasalah');
        $routes->get('Laporan', 'antrianController::Laporan');
        $routes->get('ajaxLaporan', 'antrianController::ajaxajaxLaporan');
    });

    $routes->group('DataSiswa', function ($routes) {
        $routes->get('/', 'dataSiswaController::index');
        $routes->get('DataTables', 'dataSiswaController::ajaxDataTables');
        $routes->post('Import', 'dataSiswaController::importSiswa');
        $routes->post('deleteAll', 'dataSiswaController::deleteAll');
    });
    $routes->group('chatBot', function ($routes) {
        $routes->get('/', 'chatBotController::index');
        $routes->get('DataTables', 'chatBotController::ajaxDataTables');
        $routes->post('save', 'chatBotController::store');
        $routes->post('delete', 'chatBotController::destroy');
        $routes->post('edit', 'chatBotController::edit');
        $routes->post('update', 'chatBotController::update');
        $routes->post('changeStatus', 'chatBotController::changeStatus');
        $routes->post('changeStar', 'chatBotController::changeStar');
        $routes->post('fetchResponse', 'chatBotController::fetchResponse');
    });
    $routes->group('DataSiswa', function ($routes) {
        $routes->get('/', 'dataSiswaController::index');
        $routes->get('DataTables', 'dataSiswaController::ajaxDataTables');
        $routes->post('Import', 'dataSiswaController::importSiswa');
        $routes->post('deleteAll', 'dataSiswaController::deleteAll');
    });

    $routes->group('waGateway', function ($routes) {
        $routes->get('/', 'waGatewayController::index');
        $routes->post('startWaGateway', 'waGatewayController::startWaGateway');
        $routes->post('sendMessage', 'waGatewayController::sendMessage');
        $routes->get('getStatus', 'waGatewayController::getStatus');
        $routes->get('getBarCode', 'waGatewayController::getBarCode');
        $routes->post('stopWaGateway', 'waGatewayController::stopWaGateway');
    });

    $routes->group('Setting', function ($routes) {
        $routes->get('/', 'usersController::Setting');
        $routes->post('update', 'usersController::update');
    });

});


    