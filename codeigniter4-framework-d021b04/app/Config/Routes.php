<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::doLogin');
$routes->get('/logout', 'Auth::logout');

$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->get('/buku', 'Buku::index');
    $routes->get('/buku/create', 'Buku::create');
    $routes->post('/buku/store', 'Buku::store');
    $routes->get('/buku/edit/(:num)', 'Buku::edit/$1');
    $routes->post('/buku/update/(:num)', 'Buku::update/$1');
    $routes->get('/buku/delete/(:num)', 'Buku::delete/$1');
    });
/**
 * @var RouteCollection $routes
 */
$routes->get('/hash', function () {
    return password_hash('admin123', PASSWORD_DEFAULT);
});
