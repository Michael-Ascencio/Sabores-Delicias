<?php

namespace App\Controllers;
use App\Models\ProductosModel;
use App\Models\ClienteModel;

class Cliente extends BaseController
{
    private $productoModel;

    public function __construct()
    {
        $this->productoModel = new ProductosModel();    
    }

    public function login(): string
    {
        return view('cliente/cliente');
    }

    public function entornoCliente() 
    {
        $resultado = $this->productoModel->findAll();
        $data = [
            'titulo' => 'Dashboard',
            'productos' => $resultado];
        return view('cliente/entornocliente', $data);
    }

    public function consumo()
    {
        return view('cliente/consumo');
    }

    public function configuracion($cedula = null)
    {
        $clientesModel = new ClienteModel;
        $data['clientes'] = $clientesModel->find(cedula);
        return view('cliente/entorno_configuracion', $data);
    }
}
