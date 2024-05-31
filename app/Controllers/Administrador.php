<?php

namespace App\Controllers;

class Administrador extends BaseController
{
    public function login(): string
    {
        $data = [
            'titulo' => 'login'];
        return view('administrador/administrador', $data);
    }

    public function index(): string
    {
        $data = [
            'titulo' => 'DashBoard', 
            'Nombre_admin' => 'Carlos'];
        return view('administrador/entorno_administrador', $data);
    }
    public function gestionarTienda(): string
    {
        $data = [
            'titulo' => 'Gestion Tienda'];
        return view('administrador/entorno_Gestionar_tienda', $data);
    }
    public function consultarTienda(): string
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT cod_postal, nombre, dirección, ubicacion, correo, teléfono FROM Tienda");
        $resultado = $query->getResult();
        $data = [
            'titulo' => 'Consultar Tienda',
            'tiendas' => $resultado];
        return view('administrador/entorno_de_consulta_tienda', $data);
    }
}
