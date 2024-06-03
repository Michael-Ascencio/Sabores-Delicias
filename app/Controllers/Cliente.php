<?php

namespace App\Controllers;

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
}
