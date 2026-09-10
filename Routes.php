<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Redirect the base URL to the Home URL.
$routes->get('/', static function () {
    return redirect()->to(site_url('home'));
});

$routes->get('home', 'Pages::home');
$routes->get('about', 'Pages::about');
$routes->get('customers', 'Customers::index');
$routes->get('users', 'Users::index');