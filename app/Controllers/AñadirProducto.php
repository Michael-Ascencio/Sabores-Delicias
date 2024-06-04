<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\ProductosModel;

class AñadirProducto extends BaseController
{
    private $productoModel;

    public function __construct()
    {
        $this->productoModel = new ProductosModel();    
    }
    public function index()
    {

        $data = [
            'titulo' => 'Agregar Producto'
        ];
        return view('administrador/formulario_productos', $data);
    }

    public function subir()
    {
        $file = $this->request->getFile('archivo');
        /* print_r($file); */


        if ($file->guessExtension() == 'jpg' || $file->guessExtension() == 'png' || $file->guessExtension() == 'jpeg') {

            if (!$file->isValid()) {
                print_r($file->getErrorString());
                $data = [
                    'titulo' => 'Proceso Producto',
                    'mensaje' => 'La imagen no cumple con los parametros'
                ];
                return view('administrador/proceso_producto', $data);
                exit;
            }

            $reglas = [
                'archivo' => [
                    'label' => 'Archivo',
                    'rules' => [
                        'is_image[archivo]',
                        'max_size[archivo, 3000]',
                    ]
                ]
            ];

            if (!$this->validate($reglas)) {
                $data = [
                    'titulo' => 'Proceso Producto',
                    'mensaje' => 'Su imagen es demasiado ancha o alta. Verifique que su imagen sea de unas dimensiones iguales por ejemplo 200 px por 300 px, máxima resolución 1024*768 px'
                ];
                return view('administrador/proceso_producto', $data);
                exit;
            }

            if (!$file->hasMoved()) {
                $reglas = [
                    'nombre' => [
                        'rules' => 'required',
                        'label' => 'Nombre',
                        'errors' => [
                            'required' => 'El campo {field} es obligatorio'
                        ],
                    ],
                    'precio' => [
                        'rules' => 'required|greater_than[49]',
                        'label' => 'Precio',
                        'errors' => [
                            'required' => 'El campo {field} es obligatorio',
                            'greater_than' => 'El {field} minimo para el producto es de 50$'
                        ],
                    ],
                    'cantidad_medida' => [
                        'rules' => 'required',
                        'label' => 'Cantidad',
                        'errors' => [
                            'required' => 'El campo {field} es obligatorio'
                        ],
                    ],
                    'inventario' => [
                        'rules' => 'required',
                        'label' => 'Inventario',
                        'errors' => [
                            'required' => 'El campo {field} es obligatorio',
                        ],
                    ],
                    'comentarios' => [
                        'rules' => 'required',
                        'label' => 'Comentario',
                        'errors' => [
                            'required' => 'Los {field} deben ser obligatorios'
                        ],
                    ],
                    'unidad_medida' => [
                        'rules' => 'required',
                        'label' => 'Unidad de medida',
                        'errors' => [
                            'required' => 'El campo {field} es obligatorio'
                        ],
                    ],

                ];
                if (!$this->validate($reglas)) {
                    return redirect()->back()->withInput();
                }
                $nombreArchivo = $this->request->getPost('nombre');
                $cantidadMedida = $this->request->getPost('cantidad_medida');
                $unidadMedida = $this->request->getPost('unidad_medida');
                $unidadMedida = $cantidadMedida." ".$unidadMedida;

                $nombreImagen = $nombreArchivo . '.png';
                $ruta = ROOTPATH . 'public/images/productos';
                /* True se usa para sobre escribir, si no quieres sobreescribir borralo */
                $file->move($ruta, $nombreImagen, true);
                
                $dataInsert = [
                    'nombre'=>'nombre',
                    'precio'=>'precio',
                    'imagen'=>$nombreImagen,
                    'unidad_medida'=>$unidadMedida,
                    'estado'=> 1,
                    'created_by' => 'admin',
                    'inventario'=>'inventario',
                    'comentarios'=>'comentarios',
                ];
                $this->productoModel->insert([$dataInsert]);

                $data = [
                    'titulo' => 'Proceso Producto',
                    'mensaje' => 'el producto con nombre '.$nombreArchivo.' se ha registrado correctamente'
                ];

                return view('administrador/proceso_producto', $data);
                exit;
            }
        } else {
            $data = [
                'titulo' => 'Proceso Producto',
                'mensaje' => 'Su archivo no es jpg o png o jpeg'
            ];
            return view('administrador/proceso_producto', $data);
            exit;
        }


        /* $data = [
            'titulo' => 'Agregar Producto'];
        return view('administrador/formulario_productos', $data); */
    }
}
