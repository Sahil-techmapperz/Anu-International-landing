<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Admin Routes
$routes->match(['get', 'post'], '/admin/login', 'Admin::login');
$routes->get('/admin/logout', 'Admin::logout');

$routes->group('admin', ['filter' => 'adminauth'], static function ($routes) {
    $routes->get('/', 'Admin::dashboard');
    $routes->get('dashboard', 'Admin::dashboard');
    $routes->get('subscribers', 'Newsletter::subscribers');
    $routes->post('subscribers/delete/(:num)', 'Newsletter::delete/$1');
});

// API Routes
$routes->post('api/newsletter/subscribe', 'Newsletter::subscribe');
