<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// API No. 1: Pelaporan Masalah Kos
$routes->group('report', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->post('create', 'ReportController::create'); // POST /report/create
    $routes->put('update-status/(:num)', 'ReportController::updateStatus/$1'); // PUT /report/update-status/{id}
    $routes->get('/', 'ReportController::index'); // GET /report/
    $routes->get('status/(:any)', 'ReportController::getByStatus/$1'); // GET /report/status/{status}
    $routes->get('stats', 'ReportController::stats'); // GET /report/stats
    $routes->delete('delete/(:num)', 'ReportController::deleteReport/$1'); // DELETE /report/delete/{id}
});

// API No. 2: Jadwal Perawatan Fasilitas
$routes->group('maintenance', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->post('create', 'MaintenanceController::create'); // POST /maintenance/create
    $routes->get('/', 'MaintenanceController::index'); // GET /maintenance/
    $routes->put('update/(:num)', 'MaintenanceController::update/$1'); // PUT /maintenance/update/{id}
    $routes->get('filter', 'MaintenanceController::filter'); // GET /maintenance/filter
    $routes->get('stats', 'MaintenanceController::stats'); // GET /maintenance/stats
    $routes->delete('delete/(:num)', 'MaintenanceController::delete/$1'); // DELETE /maintenance/delete/{id}
});

// API No. 3: Autentikasi
$routes->group('auth', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->post('register', 'AuthController::register'); // POST /auth/register
    $routes->post('login', 'AuthController::login'); // POST /auth/login
});
