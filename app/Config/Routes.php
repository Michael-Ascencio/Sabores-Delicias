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
$routes->get('/admin/entorno_inventario', 'Administrador::gestionarInventario');

$routes->get('/administrador/entorno_gestionar_empresa', 'Administrador::gestionarEmpresa');
$routes->post('/administrador/entorno_gestionar_empresa', 'Administrador::transaccionEmpresa');
$routes->get('/administrador/entorno_consulta_empresa', 'Administrador::consultarEmpresa');
$routes->get('/administrador/entorno_editar_empresa/(:num)', 'Administrador::editarEmpresa/$1'); //Cuando se ingresa un nit existente en la bd
$routes->get('/administrador/entorno_editar_empresa', 'Administrador::editarEmpresa'); //Cuando se ingresa un nit NO existente en la bd
$routes->post('/administrador/actualizar', 'Administrador::actualizarDatosBD'); //Actualizar datos de empresa

$routes->get('/administrador/entorno_gestionar_cliente', 'Administrador::gestionarCliente');
$routes->get('/administrador/entorno_consulta_cliente', 'Administrador::consultarCliente');
$routes->post('/administrador/actualizarCliente', 'Administrador::actualizarDatosBDCliente');
$routes->get('/administrador/entorno_editar_cliente/(:num)', 'Administrador::editarCliente/$1'); //Cuando se ingresa un nit existente en la bd
$routes->get('/administrador/entorno_editar_cliente', 'Administrador::editarCliente'); //Cuando se ingresa un nit NO existente en la bd

/* Cliente */
$routes->get('/logincliente', 'Cliente::login');
$routes->get('/cliente/entorno', 'Cliente::entornoCliente');
$routes->get('/cliente/consumo', 'Cliente::consumo');
$routes->get('/cliente/configuracion', 'Cliente::configuracion');

/* Empleado */
$routes->get('/loginempleado', 'Empleado::login');

/* Contador */
$routes->get('/logincontador', 'Contador::login');
$routes->post('/contador/consultar_informe', 'Contador::consultar_informe');



/* $routes->get('/modificartienda', 'Administrador::transaccionTienda'); */