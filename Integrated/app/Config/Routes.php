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

$routes->get('/register','Home::registerView');
$routes->get('/login','Home::loginView');
$routes->get('/dashboard','Home::dashboardView');

$routes->group('auth', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->post('register', 'AuthController::register'); // POST /auth/register
    $routes->post('login', 'AuthController::login'); // POST /auth/login
});
