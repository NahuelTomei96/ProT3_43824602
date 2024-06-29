<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Principal', 'Home::index');
$routes->get('Nosotros', 'Home::Nosotros');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('registrarse', 'Home::registrarse');
$routes->get('login', 'Home::login');