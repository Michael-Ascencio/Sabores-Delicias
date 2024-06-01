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
$routes->get('/admin/entorno', 'Administrador::index');
$routes->get('/admin/tienda', 'Administrador::gestionarTienda');
$routes->get('/admin/tienda/consulta', 'Administrador::consultarTienda');
$routes->get('/admin/tienda/modificar/(:num)', 'Administrador::verTiendaConsultada/$1');
/* $routes->get('/modificartienda', 'Administrador::transaccionTienda'); */