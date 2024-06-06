<?php

namespace App\Controllers;

use App\Services\EmpleadosSession; //Consumir el servicio de session

use App\Models\TiendasModel;
use App\Models\ClienteModel;
use App\Models\EmpresaModel;
Use App\Models\InventarioModel;

class Administrador extends BaseController
{
    protected $sessionService;

    public function __construct()
    {
        $this->sessionService = new EmpleadosSession();  // Instancia el servicio
    }

    public function login(): string
    {
        $data = ['titulo' => 'login'];
        return view('administrador/administrador', $data);
    }

    public function index(): string
    {
        $data = [
            'titulo' => 'DashBoard',
            'Nombre_admin' => 'Carlos'
        ];
        return view('administrador/entorno_administrador', $data);
    }

    public function ingreso()
    {
        $usuario = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $resultado = $this->sessionService->iniciarSesion($usuario, $password);

        if ($resultado === true) {
            return redirect()->to(base_url('admin/entorno'));
        } else {
            return redirect()->to(base_url('loginadmin'))->with('mensaje', $resultado);
        }
    }


    public function gestionarTienda(): string
    {
        $data = [
            'titulo' => 'Gestion Tienda'];
        return view('administrador/tienda/entorno_Gestionar_tienda', $data);
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
        return view('administrador/tienda/entorno_de_consulta_tienda', $data);
    }
    public function verTiendaConsultada($cod_postal){
        $tiendaModel = new TiendasModel();
        $tienda = $tiendaModel->find($cod_postal);
        $data = [
            'titulo' => 'Modificar Tienda',
            'tienda' => $tienda];
        return view('administrador/tienda/entorno_modificar_tienda', $data);
        /*return "Hola $cod_postal";*/
    }

    public function transaccionTienda(){
        $data = [
            'cod_postal', 'nombre', 'direccion', 'ubicacion', 'correo', 'telefono'
        ];
        $tiendaModel = new TiendasModel();
        $insert = $tiendaModel->insert([]);
    }

    public function gestionarEmpresa()
    {
        $data = [
            'titulo' => 'Gestion Empresa'];
        return  view('administrador/entorno_gestionar_empresa', $data);
    }

    public function transaccionEmpresa(){
        
        try{
            
            $nit = $this->request->getVar('nit');
            $nombre = $this->request->getVar('nombre');
            $direccion = $this->request->getVar('direccion');
            $telefono = $this->request->getVar('telefono');

            $empresaModel = new EmpresaModel();

            $empresaExistente = $empresaModel->find($nit);

            if($empresaExistente){
                throw new \Exception("La empresa ya se encuentra registrada en la página.");
            } elseif(strlen($nit)!==9){
                throw new \Exception("El nit no es válida. Debe ser un número de 9 cifras.");
            } elseif(strlen($telefono) !== 7 && strlen($telefono) !== 10){
                throw new \Exception("El número de teléfono no es válido.");
            }

            $data = [
                'nit' => $nit,
                'nombre' => $nombre,
                'direccion' => $direccion,
                'telefono' => $telefono
            ];
            
            $empresaModel->insert($data);
    
            return redirect()->to(base_url('Sabores-Delicias/public/administrador/entorno_gestionar_empresa'))->with('success', 'Empresa creada exitosamente.');    
        }
        catch(\Exception $e){
            return redirect()->to(base_url('Sabores-Delicias/public/administrador/entorno_gestionar_empresa'))->with('error', $e->getMessage());
        }
    }
    
    public function consultarEmpresa(){
        
        $empresaModel = new EmpresaModel();
        $resultado = $empresaModel->orderBy('nit','ASC')->findAll();
        $data = [
            'titulo' => 'Consultar Empresa',
            'empresas' => $resultado];
        
            return view('administrador/entorno_consulta_empresa', $data);
    }

    public function editarEmpresa($nit = null)
    {
        if ($nit === null) {
            $nit = $this->request->getGet('nit');
        }
    
        $empresaModel = new EmpresaModel();
        $empresa = $empresaModel->find($nit);
    
        if (!$empresa) {
            return redirect()->to(base_url('/Sabores-Delicias/public/administrador/entorno_consulta_empresa'))->with('error', 'El NIT no existe en la base de datos.');
        }
    
        $data = [
            'titulo' => 'Modificar Empresa',
            'empresa' => $empresa
        ];
        return view('administrador/entorno_editar_empresa', $data);
    }   

    public function actualizarDatosBD(){

        try{
            $nit = $this->request->getVar('nit');
            $nombre = $this->request->getVar('nombre');
            $direccion = $this->request->getVar('direccion');
            $telefono = $this->request->getVar('telefono');

            $empresaModel = new EmpresaModel();

            if(strlen($telefono) !== 7 && strlen($telefono) !== 10){
                throw new \Exception("El número de teléfono no es válido.");
            }

            $data = [
                'nit' => $nit,
                'nombre' => $nombre,
                'direccion' => $direccion,
                'telefono' => $telefono
            ];
            $empresaModel->update($nit, $data);
    
            return redirect()->to(base_url('Sabores-Delicias/public/administrador/entorno_gestionar_empresa'))->with('success', 'Empresa creada exitosamente.');    
        }
        catch(\Exception $e){
            return redirect()->to(base_url('Sabores-Delicias/public/administrador/entorno_gestionar_empresa'))->with('error', $e->getMessage());
        }
    }

    public function gestionarCliente()
    {
        $data = [
            'titulo' => 'Gestion Cliente'];
        return  view('administrador/entorno_gestionar_cliente', $data);
    }

    public function consultarCliente(){
        
        $clienteModel = new ClienteModel();
        $resultado = $clienteModel->orderBy('cedula','ASC')->findAll();
        $data = [
            'titulo' => 'Consultar Cliente',
            'clientes' => $resultado];
        
            return view('administrador/entorno_consulta_cliente', $data);
    }

    public function editarCliente($cedula= null)
    {
        if ($cedula === null) {
            $cedula = $this->request->getGet('nit');
        }
    
        $clienteModel = new ClienteModel();
        $cliente = $clienteModel->find($cedula);
    
        if (!$cliente) {
            return redirect()->to(base_url('/Sabores-Delicias/public/administrador/entorno_consulta_cliente'))->with('error', 'La cédula ingresada no existe en la base de datos.');
        }
    
        $data = [
            'titulo' => 'Modificar Cliente',
            'cliente' => $cliente
        ];
        return view('administrador/entorno_editar_cliente', $data);
    }   

    public function gestionarInventario(): string
    {
        $inventarioModel = new InventarioModel();
        $resultado = $inventarioModel->findAll();
        $data = [
            'titulo' => 'inventario',
            'inventarios' => $resultado];
        return view('administrador/entorno_inventario', $data);
    }

    public function agregarInventario(){
        
        return view('administrador/entorno_registro_inventario');
    }
}
