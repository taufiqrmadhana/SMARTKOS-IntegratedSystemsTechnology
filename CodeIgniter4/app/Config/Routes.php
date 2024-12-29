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
    $routes->post('report/create', 'ReportController::create');
    $routes->put('report/updateStatus/(:num)', 'ReportController::updateStatus/$1');
    $routes->get('report', 'ReportController::index');
    $routes->get('report/status/(:any)', 'ReportController::getByStatus/$1');
    $routes->get('report/stats', 'ReportController::stats');
    $routes->delete('report/delete/(:num)', 'ReportController::deleteReport/$1');
    $routes->post('auth/register', 'AuthController::register');
    $routes->post('auth/login', 'AuthController::login');
});

// API No. 2: Jadwal Perawatan Fasilitas
$routes->group('maintenance', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->post('create', 'MaintenanceController::create');
    $routes->get('/', 'MaintenanceController::index');
    $routes->put('update/(:num)', 'MaintenanceController::update/$1');
    $routes->get('filter', 'MaintenanceController::filter');
    $routes->get('stats', 'MaintenanceController::stats');
    $routes->delete('delete/(:num)', 'MaintenanceController::delete/$1');
});