<?php

namespace App\Controllers;

class Inventario extends BaseController
{
    public function gestionarInventario(): string
    {
        $data = [
            'titulo' => 'Inventario'];
        return view('inventario/entorno_inventario', $data);
    }

    
}