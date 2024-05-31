<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/loginadmin', 'Administrador::login');
$routes->get('/logincontador', 'Contador::login');
$routes->get('/logincliente', 'Cliente::login');
$routes->get('/loginempleado', 'Empleado::login');
$routes->get('/entornoadmin', 'Administrador::index');
$routes->get('/gestiontienda', 'Administrador::gestionarTienda');
$routes->get('/consultatienda', 'Administrador::consultarTienda');