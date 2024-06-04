<?php

use App\Controllers\Administrador;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/', 'Home::index');

/* Administrador */
$routes->get('/loginadmin', 'Administrador::login');
$routes->get('/admin/entorno', 'Administrador::index');
$routes->get('/admin/tienda', 'Administrador::gestionarTienda');
$routes->get('/admin/tienda/consulta', 'Administrador::consultarTienda');
$routes->get('/admin/tienda/modificar/(:num)', 'Administrador::verTiendaConsultada/$1');
$routes->get('/admin/productos/add', 'AñadirProducto::index');
$routes->post('/admin/productos/add', 'AñadirProducto::subir');
$routes->get('/Inventario/entorno_inventario', 'Inventario::gestionarInventario');

/* Cliente */
$routes->get('/logincliente', 'Cliente::login');
$routes->get('/cliente/entorno', 'Cliente::entornoCliente');
$routes->get('/cliente/consumo', 'Cliente::consumo');
$routes->get('/cliente/configuracion', 'Cliente::configuracion');
$routes->get('/Inventario/entorno_inventario', 'Inventario::gestionarInventario');
/* $routes->get('/modificartienda', 'Administrador::transaccionTienda'); */