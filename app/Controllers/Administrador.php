<?php

namespace App\Controllers;

use App\Services\EmpleadosSession; //Consumir el servicio de session

use App\Models\TiendasModel;
use App\Models\ClienteModel;
use App\Models\EmpresaModel;
Use App\Models\InventarioModel;
Use App\Models\AreaModel;

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

        if ($resultado['status'] === true) {
            $cargo = $resultado['data']['cargo'];
            if ($cargo == 1 || $cargo == 2) {
                return redirect()->to(base_url('admin/entorno'));
            } else {
                return redirect()->to(base_url('loginadmin'))->with('mensaje', 'No tiene permisos para acceder como administrador.');
            }
        } else {
            return redirect()->to(base_url('loginadmin'))->with('mensaje', $resultado['message']);
        }
    }

    public function salida()
    {
        return $this->sessionService->cerrarSesion();
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
    
            return redirect()->to(base_url('administrador/entorno_gestionar_empresa'))->with('success', 'Empresa creada exitosamente.');    
        }
        catch(\Exception $e){
            return redirect()->to(base_url('administrador/entorno_gestionar_empresa'))->with('error', $e->getMessage());
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
            return redirect()->to(base_url('/administrador/entorno_consulta_empresa'))->with('error', 'El NIT no existe en la base de datos.');
        }
    
        $data = [
            'titulo' => 'Modificar Empresa',
            'empresa' => $empresa
        ];
        return view('administrador/entorno_editar_empresa', $data);
    }   

    public function actualizarDatosBD(){ //Actualizar datos bd empresa

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
    
            return redirect()->to(base_url('administrador/entorno_gestionar_empresa'))->with('success', 'Empresa actualizada exitosamente.');    

        }
        catch(\Exception $e){
            return redirect()->to(base_url('administrador/entorno_gestionar_empresa'))->with('error', $e->getMessage());
        }
    }

    public function gestionarCliente()
    {
    
        $clienteModel = new ClienteModel();
        $areaModel = new AreaModel();
        $empresaModel = new EmpresaModel();

        $cliente = $clienteModel->orderBy('cedula','ASC')->findAll();
        $area = $areaModel->orderBy('id_area','ASC')->findAll();
        $empresa = $empresaModel->orderBy('nit','ASC')->findAll();
    
        $data = [
            'titulo' => 'Consultar Cliente',
            'clientes' => $cliente,
            'areas' => $area,
            'empresas' => $empresa
        ];
        
            return view('administrador/entorno_gestionar_cliente', $data);
    }

    public function transaccionCliente(){
        
        try{
            $cedula = $this->request->getVar('cedula');
            $nombre = $this->request->getVar('nombre');
            $apellido = $this->request->getVar('apellido');
            $correo = $this->request->getVar('correo');
            $contrasena = $this->request->getVar('contrasena');
            $Area_id_area = $this->request->getVar('Area_id_area');
            $telefono = $this->request->getVar('telefono');
            $Empresa_nit = $this->request->getVar('Empresa_nit');

            $clienteModel = new ClienteModel();
 
            if(strlen($cedula) < 6 || strlen($cedula) > 10){
                throw new \Exception("La cédula debe tener mínimo 6 dígitos y máximo 10.");
            } elseif(!preg_match("/^[A-Za-z]+$/", $nombre)){
                throw new \Exception("El nombre solo debe contener letras.");
            } elseif(strlen($nombre)<2 || strlen($nombre)>50){
                throw new \Exception("El nombre debe tener mínimo 2 letras y máximo 50.");
            } elseif(!preg_match("/^[A-Za-z\s]+$/", $apellido)){
                throw new \Exception("El apellido solo debe contener letras.");
            } elseif(strlen($apellido)<2 || strlen($apellido)>50){
                throw new \Exception("El apellido debe tener mínimo 2 letras y máximo 50.");
            } elseif(strlen($contrasena)<5){
                throw new \Exception("La contraseña debe tener mínimo 5 caracteres.");
            } elseif(strlen($telefono) !== 7 && strlen($telefono) !== 10){
                throw new \Exception("El número de teléfono no es válido.");
            }

            $data = [
                'cedula' => $cedula,
                'nombre' => $nombre,
                'apellido' => $apellido,
                'correo' => $correo,
                'contrasena' => $contrasena,
                'Area_id_area' => $Area_id_area,
                'telefono' => $telefono,
                'Empresa_nit' => $Empresa_nit

            ];
            
            $clienteModel->insert($data);
    

            return redirect()->to(base_url('administrador/entorno_gestionar_cliente'))->with('success', 'Cliente creado exitosamente.');    
        }
        catch(\Exception $e){
            return redirect()->to(base_url('administrador/entorno_gestionar_cliente'))->with('error', $e->getMessage());
        }
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
        $areaModel = new AreaModel();
        $empresaModel = new EmpresaModel();

        $cliente = $clienteModel->find($cedula);
        $area = $areaModel->find($cliente->Area_id_area);
        $empresa = $empresaModel->find($cliente->Empresa_nit);

        $areas = $areaModel->orderBy('id_area','ASC')->findAll();
        $empresas = $empresaModel->orderBy('nit','ASC')->findAll();
    
        if (!$cliente) {
            return redirect()->to(base_url('/administrador/entorno_consulta_cliente'))->with('error', 'La cédula ingresada no existe en la base de datos.');
        }
    
        $data = [
            'titulo' => 'Modificar Cliente',
            'cliente' => $cliente,
            'area' => $area,
            'areas' => $areas,
            'empresa' => $empresa,
            'empresas' => $empresas
        ];
        return view('administrador/entorno_editar_cliente', $data);
    }   

    public function actualizarDatosBDCliente(){

        try{
            $cedula = $this->request->getVar('cedula');
            $nombre = $this->request->getVar('nombre');
            $apellido = $this->request->getVar('apellido');
            $correo = $this->request->getVar('correo');
            $contrasena = $this->request->getVar('contrasena');
            $Area_id_area = $this->request->getVar('Area_id_area');
            $telefono = $this->request->getVar('telefono');
            $Empresa_nit = $this->request->getVar('Empresa_nit');

            $clienteModel = new ClienteModel();
 
            if(!preg_match("/^[A-Za-z\s]+$/", $nombre)){
                throw new \Exception("El nombre solo debe contener letras.");
            } elseif(strlen($nombre)<2 || strlen($nombre)>50){
                throw new \Exception("El nombre debe tener mínimo 2 letras y máximo 50.");
            } elseif(!preg_match("/^[A-Za-z\s]+$/", $apellido)){
                throw new \Exception("El apellido solo debe contener letras.");
            } elseif(strlen($apellido)<2 || strlen($apellido)>50){
                throw new \Exception("El apellido debe tener mínimo 2 letras y máximo 50.");
            } elseif(strlen($contrasena)<5){
                throw new \Exception("La contraseña debe tener mínimo 5 caracteres.");
            } elseif(strlen($telefono) !== 7 && strlen($telefono) !== 10){
                throw new \Exception("El número de teléfono no es válido.");
            }

            $data = [
                'cedula' => $cedula,
                'nombre' => $nombre,
                'apellido' => $apellido,
                'correo' => $correo,
                'contrasena' => $contrasena,
                'Area_id_area' => $Area_id_area,
                'telefono' => $telefono,
                'Empresa_nit' => $Empresa_nit
            ];
            
            $clienteModel->update($cedula, $data);
    
            return redirect()->to(base_url('administrador/entorno_gestionar_cliente'))->with('success', 'Cliente actualizado exitosamente.');    
        }
        catch(\Exception $e){
            return redirect()->to(base_url('administrador/entorno_gestionar_cliente'))->with('error', $e->getMessage());
        }
    }
//Objeto área y empresa

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

        $inventarioModel = new InventarioModel();
    
        $inventarios = $inventarioModel->orderBy('id_inventario','ASC')->findAll();
    
        $data = [
            'titulo' => 'Gestion Inventario',
            'inventarios' => $inventarios
        ];
        
        return view('administrador/entorno_registro_inventario', $data);
    }

    public function transaccionInventario(){
        try{

            $Producto_id_producto = $this->request->getVar('Producto_id_producto');
            $Tienda_cod_postal = $this->request->getVar('Tienda_cod_postal');
            $cantidad = $this->request->getVar('Cantidad');
            $fecha_caducidad = $this->request->getVar('fecha_caducidad');
            $lote = $this->request->getVar('lote');
            
            $inventarioModel = new InventarioModel();

            
            $data = [
                'id_inventario' => $id_inventario,
                'Producto_id_producto' => $Producto_id_producto,
                'Tienda_cod_postal' => $Tienda_cod_postal,
                'cantidad' => $cantidad,
                'fecha_caducidad' => $fecha_caducidad,
                'lote' => $lote
            ];
            
            $inventarioModel->insert($data);
    

            return redirect()->to(base_url('administrador/entorno_registro_inventario'))->with('success', 'Cliente creado exitosamente.');    
        }
        catch(\Exception $e){
            return redirect()->to(base_url('administrador/entorno_registro_inventario'))->with('error', $e->getMessage());
        }
    }

    public function editarInventario($id_inventario = null){

        
        $inventarioModel = new InventarioModel();
        $data['inventario'] = $inventarioModel->find($id_inventario);

        return view('administrador/entorno_edit_inventario', $data);

    }

}
