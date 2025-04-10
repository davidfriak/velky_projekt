<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::hlavnistranka');

$routes->get("komponent/(:num)", "Main::komponent/$1");
$routes->get("informace/(:num)", "Main::informace/$1");
