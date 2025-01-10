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

// Rute untuk halaman login dan register
$routes->get('/register', 'Home::registerView', ['filter' => 'cors']);
$routes->get('/login', 'Home::loginView', ['filter' => 'cors']);

// Terapkan filter 'auth' dan 'cors' untuk rute dashboard
$routes->get('/dashboard', 'Home::dashboardView', ['filter' => ['auth', 'cors']]);

// Rute untuk autentikasi
$routes->group('auth', ['namespace' => 'App\Controllers', 'filter' => 'cors'], function($routes) {
    $routes->post('register', 'AuthController::register'); // POST /auth/register
    $routes->post('login', 'AuthController::login');       // POST /auth/login
    $routes->post('logout', 'AuthController::logout');     // POST /auth/logout
});

// Terapkan filter 'auth' dan 'cors' untuk grup maintenance
$routes->group('maintenance', [
    'namespace' => 'App\Controllers',
    'filter'    => ['auth', 'cors']
], function($routes) {
    $routes->post('create', 'MaintenanceController::create');        // POST /maintenance/create
    $routes->get('/', 'MaintenanceController::index');               // GET /maintenance/
    $routes->put('update/(:num)', 'MaintenanceController::update/$1'); // PUT /maintenance/update/{id}
    $routes->get('filter', 'MaintenanceController::filter');         // GET /maintenance/filter
    $routes->get('stats', 'MaintenanceController::stats');           // GET /maintenance/stats
    $routes->delete('delete/(:num)', 'MaintenanceController::delete/$1'); // DELETE /maintenance/delete/{id}
});
