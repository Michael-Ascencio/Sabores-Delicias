<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\ProductosModel;

class AnadirProducto extends BaseController
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
        return view('administrador/producto/formulario_productos', $data);
    }

    public function subir()
    {
        $file = $this->request->getFile('archivo');
        /* print_r($file); */
        $nombreArchivo = $this->request->getPost('nombre');
        $unidadMedida = $this->request->getPost('unidad_medida');
        $productoExistente = $this->productoModel->where('nombre', $nombreArchivo)
            ->where('unidad_medida', $unidadMedida)
            ->first();
        if ($productoExistente !== null) {
            $data = [
                'titulo' => 'Proceso Producto',
                'mensaje' => 'El producto ya existe en el inventario.'
            ];
            return view('administrador/producto/proceso_producto', $data);
        }

        if ($file->guessExtension() == 'jpg' || $file->guessExtension() == 'png' || $file->guessExtension() == 'jpeg') {

            if (!$file->isValid()) {
                print_r($file->getErrorString());
                $data = [
                    'titulo' => 'Proceso Producto',
                    'mensaje' => 'La imagen no cumple con los parametros.'
                ];
                return view('administrador/producto/proceso_producto', $data);
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
                return view('administrador/producto/proceso_producto', $data);
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
                $precio = $this->request->getPost('precio');
                $comentario = $this->request->getPost('comentarios');
                $cantidadMedida = $this->request->getPost('cantidad_medida');
                $unidadMedida = $this->request->getPost('unidad_medida');
                $unidadMedida = $this->request->getPost('unidad_medida');
                $unidadMedida = $cantidadMedida . " " . $unidadMedida;

                $nombreImagen = str_replace(' ', '_', $nombreArchivo) . '.png';
                $ruta = ROOTPATH . 'public/images/productos';
                /* True se usa para sobre escribir, si no quieres sobreescribir borralo */
                $file->move($ruta, $nombreImagen, true);

                $data = [

                    'nombre' => $nombreArchivo,
                    'precio' => $precio,
                    'imagen' => $nombreImagen,
                    'unidad_medida' => $unidadMedida,
                    'estado' => 1,
                    'created_by' => "admin",
                    'descripcion' => $comentario,
                ];
                $this->productoModel->insert($data);

                $data = [
                    'titulo' => 'Proceso Producto',
                    'mensaje' => 'El producto con nombre ' . $nombreArchivo . ' se ha registrado correctamente en el inventario '
                ];

                return view('administrador/producto/proceso_producto', $data);
                exit;
            }
        } else {
            $data = [
                'titulo' => 'Proceso Producto',
                'mensaje' => 'Su archivo no es jpg o png o jpeg'
            ];
            return view('administrador/producto/proceso_producto', $data);
            exit;
        }


        /* $data = [
            'titulo' => 'Agregar Producto'];
        return view('administrador/formulario_productos', $data); */
    }

    public function consultarProducto(): string
    {

        // Obtén los datos del producto que se va a actualizar
        $nombreArchivo = $this->request->getPost('nombre');
        $unidadMedida = $this->request->getPost('unidad_medida');

        // Verifica si existe otro producto con el mismo nombre y unidad de medida (excepto el que se está actualizando)
        $productoExistente = $this->productoModel->where('nombre', $nombreArchivo)
            ->where('unidad_medida', $unidadMedida)
            ->first();
        // Si ya existe otro producto con las mismas características, muestra un mensaje y evita la actualización
        if ($productoExistente !== null) {
            $data = [
                'titulo' => 'Proceso Producto',
                'mensaje' => 'No se puede actualizar el producto porque ya existe otro producto con el mismo nombre y unidad de medida.'
            ];
            return view('administrador/producto/proceso_producto', $data);
        }
        $resultado = $this->productoModel->findAll();

        $data = [
            'titulo' => 'Consultar Producto',
            'productos' => $resultado
        ];
        return view('administrador/producto/entorno_de_consulta_producto', $data);
    }

    public function modificarProducto($id)
    {
        $producto = $this->productoModel->find($id);
        $data = [
            'titulo' => 'Modificar Tienda',
            'producto' => $producto
        ];
        return view('administrador/producto/entorno_modificar_producto', $data);
    }

    public function actualizar()
    {
        $file = $this->request->getFile('archivo');


        if ($file->guessExtension() == 'jpg' || $file->guessExtension() == 'png' || $file->guessExtension() == 'jpeg') {

            if (!$file->isValid()) {
                print_r($file->getErrorString());
                $data = [
                    'titulo' => 'Proceso Producto',
                    'mensaje' => 'La imagen no cumple con los parametros'
                ];
                return view('administrador/producto/proceso_producto', $data);
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
                return view('administrador/producto/proceso_producto', $data);
                exit;
            }

            if (!$file->hasMoved()) {
                $reglas = [
                    'precio' => [
                        'rules' => 'required|greater_than[49]',
                        'label' => 'Precio',
                        'errors' => [
                            'required' => 'El campo {field} es obligatorio',
                            'greater_than' => 'El {field} minimo para el producto es de 50$'
                        ],
                    ],
                    'comentarios' => [
                        'rules' => 'required',
                        'label' => 'Comentario',
                        'errors' => [
                            'required' => 'Los {field} deben ser obligatorios'
                        ],
                    ],
                ];
                if (!$this->validate($reglas)) {
                    return redirect()->back()->withInput();
                }
                $id_producto = $this->request->getPost('id');
                $nombreArchivo = $this->request->getPost('nombre');
                $precio = $this->request->getPost('precio');
                $unidadMedida = $this->request->getPost('unidad_medida');
                $estado_producto = $this->request->getPost('estado');
                $comentario = $this->request->getPost('comentarios');

                $nombreImagen = $nombreArchivo . '.png';
                $ruta = ROOTPATH . 'public/images/productos';
                /* True se usa para sobre escribir, si no quieres sobreescribir borralo */
                $file->move($ruta, $nombreImagen, true);

                $data = [
                    'id_producto' => $id_producto,
                    'nombre' => $nombreArchivo,
                    'precio' => $precio,
                    'imagen' => $nombreImagen,
                    'unidad_medida' => $unidadMedida,
                    'estado' => $estado_producto,
                    'created_by' => "admin",
                    'descripcion' => $comentario,
                ];

                $this->productoModel->update($id_producto, $data);

                $data = [
                    'titulo' => 'Proceso Producto',
                    'mensaje' => 'El producto con nombre ' . $nombreArchivo . ' se ha modificado correctamente'
                ];

                return view('administrador/producto/proceso_producto', $data);
                exit;
            }
        } else {
            $data = [
                'titulo' => 'Proceso Producto',
                'mensaje' => 'Su archivo no es jpg o png o jpeg'
            ];
            return view('administrador/producto/proceso_producto', $data);
            exit;
        }


        /* $data = [
            'titulo' => 'Agregar Producto'];
        return view('administrador/formulario_productos', $data); */
    }
}
