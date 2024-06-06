<?php

namespace App\Services;

use App\Models\ClienteModel;

class ClientesSession
{
    public function iniciarSesion($usuario, $password)
    {
        $EmpleadoModel = new ClienteModel();
        $resultado = $EmpleadoModel->where('cedula', $usuario)->first();

        if ($resultado !== null) {
            if (password_verify($password, $resultado->contrasena)) {
                $data = [
                    'usuario' => $resultado->nombre,
                    'cargo' => $resultado->Cargo_id_cargo,
                ];
                $session = session();
                $session->set($data);
                return [
                    'status' => true,
                    'data' => $data
                ];
            } else {
                return [
                    'status' => false,
                    'message' => 'Contraseña incorrecta.'
                ];
            }
        } else {
            return [
                'status' => false,
                'message' => 'Usuario no encontrado.'
            ];
        }
    }

    public function cerrarSesion()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('loginadmin'));
    }
}
