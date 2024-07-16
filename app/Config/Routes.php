<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Principal', 'Home::index');
$routes->get('Nosotros', 'Home::Nosotros');
$routes->get('formacion', 'Home::formacion');
$routes->get('registrar', 'Home::registrar');
$routes->get('login', 'Home::login');


// Rutas del registro de usuarios
$routes->get('/registrar','usuario_Controller::create'); 
$routes->post('/enviar-form','usuario_Controller::formValidation');


// Rutas del Login

$routes->get('/login', 'login_Controller');
$routes->post('/enviarlogin','login_Controller::auth');
$routes->get('/panel','panel_Controller::index', ['filter'=> 'auth']);
$routes->get('/logout', 'login_Controller::logout');





if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
