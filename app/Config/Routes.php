<?php

use App\Controllers\Administrador;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/', 'Home::index');

/* Administrador */
    /* login */
$routes->get('/loginadmin', 'Administrador::login');
$routes->post('/loginadmin', 'Administrador::ingreso');
$routes->get('/logoutadmin', 'Administrador::salida');
    /* Entorno */
$routes->get('/admin/entorno', 'Administrador::index');
    /* Tienda */
$routes->get('/admin/tienda', 'Administrador::gestionarTienda');
$routes->post('/admin/tienda', 'Administrador::gestionarTienda');
$routes->get('/admin/tienda/consulta', 'Administrador::consultarTienda');
$routes->get('/admin/tienda/modificar/(:num)', 'Administrador::verTiendaConsultada/$1');
$routes->get('/admin/tienda/consulta', 'Administrador::consultarTienda');
    /* Productos */
$routes->get('/admin/productos', 'AnadirProducto::index'); /* Arreglar porque solo acepta enteros*/
$routes->post('/admin/productos', 'AnadirProducto::subir');
$routes->get('/admin/productos/consulta', 'AnadirProducto::consultarProducto');
$routes->get('/admin/productos/modificar/(:num)', 'AnadirProducto::modificarProducto/$1');
$routes->post('/admin/productos/actualizar', 'AnadirProducto::actualizar');
    /* Inventario */
$routes->get('/admin/entorno_inventario', 'Administrador::gestionarInventario');

$routes->get('/admin/entorno_registro_inventario', 'Administrador::agregarInventario');

$routes->get('/administrador/entorno_gestionar_cliente', 'Administrador::gestionarCliente');

//CRUD Empresa
$routes->get('/administrador/entorno_gestionar_empresa', 'Administrador::gestionarEmpresa');
$routes->post('/administrador/entorno_gestionar_empresa', 'Administrador::transaccionEmpresa');
$routes->get('/administrador/entorno_consulta_empresa', 'Administrador::consultarEmpresa');
$routes->get('/administrador/entorno_editar_empresa/(:num)', 'Administrador::editarEmpresa/$1'); //Cuando se ingresa un nit existente en la bd
$routes->get('/administrador/entorno_editar_empresa', 'Administrador::editarEmpresa'); //Cuando se ingresa un nit NO existente en la bd
$routes->post('/administrador/actualizar', 'Administrador::actualizarDatosBD'); //Actualizar datos de empresa

//CRUD cliente
$routes->get('/administrador/entorno_gestionar_cliente', 'Administrador::gestionarCliente');
$routes->post('/administrador/entorno_gestionar_cliente', 'Administrador::transaccionCliente');
$routes->get('/administrador/entorno_consulta_cliente', 'Administrador::consultarCliente');
$routes->get('/administrador/entorno_editar_cliente/(:num)', 'Administrador::editarCliente/$1'); //Cuando se ingresa un cedula existente en la bd
$routes->get('/administrador/entorno_editar_cliente', 'Administrador::editarCliente'); //Cuando se ingresa un cedula NO existente en la bd
$routes->post('/administrador/actualizarCliente', 'Administrador::actualizarDatosBDCliente');

/* Cliente */
$routes->get('/logincliente', 'Cliente::login');
$routes->get('/cliente/entorno', 'Cliente::entornoCliente');
$routes->get('/cliente/consumo', 'Cliente::consumo');
$routes->get('/cliente/configuracion', 'Cliente::configuracion');

/* Empleado */
$routes->get('/loginempleado', 'Empleado::login');

/* Contador */
$routes->get('/logincontador', 'Contador::login');
$routes->post('/logincontador', 'Contador::ingreso');
$routes->get('/logoutontador', 'Contador::salida');
$routes->get('/contador/informe_de_ventas', 'Contador::fechas_de_reporte');
$routes->post('/contador/consultar_informe', 'Contador::consultar_informe');
$routes->get('/contador/descargar_csv', 'Contador::descargar_csv');

/* $routes->get('/modificartienda', 'Administrador::transaccionTienda'); */