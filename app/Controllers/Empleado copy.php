?php

namespace App\Controllers;

class Empleado extends BaseController
{
    public function login(): string
    {
        return view('empleado/empleado');
    }
}
