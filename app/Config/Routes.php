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
$routes->get('/admin/productos/add', 'Galeria::index');
$routes->post('/admin/productos/add', 'Galeria::subir');
$routes->get('/cliente/entorno', 'Cliente::entornoCliente');
$routes->get('/cliente/consumo', 'Cliente::consumo');
$routes->get('/administrador/entorno_gestionar_cliente', 'Administrador::gestionarCliente');
/* $routes->get('/modificartienda', 'Administrador::transaccionTienda'); */