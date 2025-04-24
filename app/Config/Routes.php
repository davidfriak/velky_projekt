<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::hlavnistranka');

$routes->get("komponent/(:segment)", "Main::komponent/$1");
$routes->get("komponenty/informace/(:num)", "Main::informace/$1");
$routes->get("tab", "Main::tab");
