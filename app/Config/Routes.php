<?php

use CodeIgniter\Router\RouteCollection;


$routes->get('/', 'Home::index');
$routes->get('/anime/(:segment)', 'Anime::detail/$1');
$routes->setAutoRoute(true);
