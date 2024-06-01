<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Galeria extends BaseController
{
    public function index()
    {
        $data = [
            'titulo' => 'Agregar Producto'];
        return view('administrador/formulario_productos', $data);
    }
    public function subir()
    {
            $file = $this->request->getFile('archivo');
            /* print_r($file); */

            if(!$file->isValid()){
                echo $file->getErrorString();
                exit;
            }
            
            $reglas = [
                'archivo' => [
                    'label' => 'Archivo',
                    'rules' =>[
                        'is_image[archivo]',
                        'max_size[archivo, 3000]',
                        'max_dims[archivo,1024,768]',
                    ]
                ]
                    ];

            if(!$this->validate($reglas)){
                print_r($this->validator->getErrors());
                exit;
            }

            if(!$file->hasMoved()){

                $ruta = ROOTPATH . 'public/images/productos';
                /* True se usa para sobre escribir, si no quieres sobreescribir borralo */
                $file->move($ruta, 'NombreDinamico.png', true);
                echo "Archivo guardado correctamente";
                exit;
            }


        /* $data = [
            'titulo' => 'Agregar Producto'];
        return view('administrador/formulario_productos', $data); */
    }

}
