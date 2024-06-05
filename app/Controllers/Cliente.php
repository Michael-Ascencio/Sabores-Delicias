<?php

namespace App\Controllers;
use  App\Models\Controllers;
use  App\Models\ProductosModel;
class Cliente extends BaseController
{
    public function login(): string
    {
        return view('cliente/cliente');
    }

    public function entornoCliente() 
    {
        return view('cliente/entornocliente');
    }
    public function consumo()
    {
        return view('cliente/consumo');

    }
    public function configuracion()
    {
        return view('cliente/entorno_configuracion');
    }

  public function productosCarrito()
  {
    $productoModel = new ProductosModel();
    $resultado = $productoModel ->findAll();

    $data  =[ 'titulo'=>  'Carrito', 'Productos'=> $resultado];
    return view('Cliente/entornocliente', $data);

  } 
   
}
