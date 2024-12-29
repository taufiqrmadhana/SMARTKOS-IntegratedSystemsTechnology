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
    $routes->post('create', 'ReportController::create');
    $routes->get('/', 'ReportController::index');
    $routes->put('updateStatus/(:num)', 'ReportController::updateStatus/$1');
    $routes->get('status/(:segment)', 'ReportController::getByStatus/$1');
    $routes->get('stats', 'ReportController::stats');
    $routes->delete('delete/(:num)', 'ReportController::deleteReport/$1');
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