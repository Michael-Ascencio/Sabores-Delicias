<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Enlaces extends BaseController
{
    public function enlace($url)
    {
        $enlace = $_SERVER['HTTP_HOST'].$url;
        return $enlace;
    }
}
