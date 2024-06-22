<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'page::about');
$routes->get('/contact', 'page::contact');
$routes->get('/fags', 'page::fags');
$routes->setAutoRoute(true);
$routes->get('/biodata', 'page::biodata');
