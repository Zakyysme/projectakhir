<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/cart', 'Home::cart');
$routes->get('/shop', 'Home::shop');
$routes->get('/shop-single', 'Home::shopsingle');
$routes->get('/contact', 'Home::contact');

$routes->group('auth', function($routes) {
    $routes->post('login', 'AuthController::login');
    $routes->post('register', 'AuthController::register');
});

