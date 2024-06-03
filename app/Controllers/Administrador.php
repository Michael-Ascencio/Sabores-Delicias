<?php

namespace App\Controllers;

use App\Models\TiendasModel;
use App\Models\ClienteModel;
use App\Models\EmpresaModel;

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
        /*$db = \Config\Database::connect();
        $query = $db->query("SELECT cod_postal, nombre, dirección, ubicacion, correo, teléfono FROM Tienda");
        $resultado = $query->getResult();*/

        $tiendaModel = new TiendasModel();
        $resultado = $tiendaModel->findAll();
        $data = [
            'titulo' => 'Consultar Tienda',
            'tiendas' => $resultado];
        return view('administrador/entorno_de_consulta_tienda', $data);
    }
    public function verTiendaConsultada($cod_postal){
        $tiendaModel = new TiendasModel();
        $tienda = $tiendaModel->find($cod_postal);
        $data = [
            'titulo' => 'Modificar Tienda',
            'tienda' => $tienda];
        return view('administrador/entorno_modificar_tienda', $data);
        /*return "Hola $cod_postal";*/
    }

    public function transaccionTienda(){
        $data = [
            'cod_postal', 'nombre', 'direccion', 'ubicacion', 'correo', 'telefono'
        ];
        $tiendaModel = new TiendasModel();
        $insert = $tiendaModel->insert([]);
    }

    public function gestionarCliente()
    {
        $data = [
            'titulo' => 'Gestion Cliente'];
        return  view('administrador/entorno_gestionar_cliente', $data);
    }

    public function transaccionCliente(){
        $data=[
            'cedula', 'nombre', 'apellido', 'correo', 'contrasena', 'teléfono'
        ]; 
        $clienteModel = new ClienteModel();
        $insert = $clienteModel->insert([]);
    }

    public function gestionarEmpresa()
    {
        $data = [
            'titulo' => 'Gestion Empresa'];
        return  view('administrador/entorno_gestionar_empresa', $data);
    }

    public function transaccionEmpresa(){
        $data = [
            'nit', 'nombre', 'direccion', 'telefono'
        ];
        $empresaModel = new EmpresaModel();
        $insert = $empresaModel->insert([]);
    }

}
