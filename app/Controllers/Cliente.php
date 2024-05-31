<?php

namespace App\Controllers;

class Cliente extends BaseController
{
    public function login(): string
    {
        return view('cliente/cliente');
    }
}
