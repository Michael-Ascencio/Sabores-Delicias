<?php

namespace App\Controllers;
use App\Models\ClienteModel;
use App\Models\VentaModel;
use App\Models\DetallepedidoModel;
use App\Models\PedidoModel;
use App\Models\ProductosModel;

class Contador extends BaseController
{
    public function login()
    {
        return view('contador/contador');
    }
    public function fechas_de_reporte()
    {
        return view ('contador/formulario_de_fechas');
    }
    
    public function consultar_informe()
    {
        $fecha_inicial = $this->request->getPost('fecha_inicial');
        $fecha_final = $this->request->getPost('fecha_final');
        $coneccion_bd=Database::conect();
                $sql =("  SELECT 
                    Cliente.nombre, 
                    Cliente.apellido, 
                    SUM(Producto.precio * subquery.product_count) AS total_compras,
                    '$fecha_inicial - $fecha_final' AS fechas
                FROM 
                    Cliente
                JOIN 
                    Pedido ON Cliente.cedula = Pedido.Cliente_id_cliente
                JOIN 
                    (
                        SELECT 
                            Pedido_id_pedido, 
                            Refrigerio_has_Producto_Producto_id_producto1 AS Producto_id_producto, 
                            COUNT(*) AS product_count
                        FROM 
                            DetallePedido
                        GROUP BY 
                            Pedido_id_pedido, Refrigerio_has_Producto_Producto_id_producto1
                    ) AS subquery ON Pedido.id_pedido = subquery.Pedido_id_pedido
                JOIN 
                    Producto ON subquery.Producto_id_producto = Producto.id_producto
                WHERE 
                    Pedido.fecha BETWEEN '$fecha_inicial' AND '$fecha_final'
                GROUP BY 
                    Cliente.nombre, Cliente.apellido"
        );

        $query = $db->query($sql, [$fecha_inicial, $fecha_final]);
        $resultado_query=$coneccion_bd->getResult();

        $data =['titulo'=>'Informe de Ventas', 'ventas'=>$resultado_query];
        return view('contador/Informe_de_ventas',$data);
        
    }

    public function descargar_csv()
    {
        $fecha_inicial = $this->request->getGet('fecha_inicial');
        $fecha_final = $this->request->getGet('fecha_final');

        $db = Database::connect();

        $sql = "
            SELECT 
                Cliente.nombre, 
                Cliente.apellido, 
                SUM(Producto.precio * subquery.product_count) AS total_compras,
                '$fecha_inicial - $fecha_final' AS fechas
            FROM 
                Cliente
            JOIN 
                Pedido ON Cliente.cedula = Pedido.Cliente_id_cliente
            JOIN 
                (
                    SELECT 
                        Pedido_id_pedido, 
                        Refrigerio_has_Producto_Producto_id_producto1 AS Producto_id_producto, 
                        COUNT(*) AS product_count
                    FROM 
                        DetallePedido
                    GROUP BY 
                        Pedido_id_pedido, Refrigerio_has_Producto_Producto_id_producto1
                ) AS subquery ON Pedido.id_pedido = subquery.Pedido_id_pedido
            JOIN 
                Producto ON subquery.Producto_id_producto = Producto.id_producto
            WHERE 
                Pedido.fecha BETWEEN ? AND ?
            GROUP BY 
                Cliente.nombre, Cliente.apellido
        ";

        $query = $db->query($sql, [$fecha_inicial, $fecha_final]);
        $resultado_query = $query->getResultArray();

        // Definir el nombre del archivo CSV
        $filename = 'Reporte_consumos' . date('Ymd') . '.csv';

        // Establecer los encabezados para la descarga del archivo
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment;filename="' . $filename . '"');

        // Abrir la salida de PHP para escribir el archivo CSV
        $fp = fopen('php://output', 'w');

        // Escribir la fila de encabezados
        fputcsv($fp, ['Nombre', 'Apellido', 'Total Compras']);

        // Escribir las filas de datos
        foreach ( $resultado_query as $row) {
            fputcsv($fp, [$row['nombre'], $row['apellido'], $row['total_compras']]);
        }

        // Cerrar el archivo
        fclose($fp);

        // Detener la ejecución del script
        exit;
    }










           /* $fecha_inicial=$fecha_inicial;
        $fecha_final=$fecha_final;
        $Clientemodel= new ClienteModel();
        $VentaModel= new VentaModel();
        $PedidoModel= new PedidoModel();
        $DetallepedidoModel= new DetallepedidoModel();
        $detalles_cliente=$Clientemodel->findAll();

        for each $detalles_cliente as $Clientemodel {   // accede a cada uno de los clientes

           $cliente_cedula = $Clientemodel->$cedula;    // por cada cliente toma su cedula 
           $pedidos_cliente=$PedidoModel->where('Cliente_id_cliente',$cedula)->findAll();   // busca todos los pedidos asociados a esta cedula
           $sumatoria_cliente=0;

           for each $pedidos_cliente as $PedidoModel{   // hace un paso por todos  los pedidos
            $sumatoria_pedido_actual=0;
            $id_pedido_=$PedidoModel->$id_pedido ;
            $detalles_del_pedido=$DetallepedidoModel->where('Cliente_id_cliente',$id_pedido_)->findAll(); //busca todos los detalles de pedido asociados a ese id de pedido

            for each  $detalles_del_pedido as $DetallepedidoModel { // por cada detalle del pedido accede a este

                $ProductosModel= new ProductosModel();
                $productos = $ProductosModel ->where ('id_producto',$Refrigerio_has_Producto_Producto_id_producto1); 
                $cantidad_del_pedid = $DetallepedidoModel -> $cantidad_de_producto;
                $costo_producto = $productos -> $precio; //intentando sacar el precio del producto con condicion
                $sumatoria_pedido_actual=$sumatoria_pedido_actual+($costo_producto*$cantidad_del_pedid);//total de precio, multiplicacion del producto por cantidad de producto

            }

            $sumatoria_cliente = $sumatoria_cliente+$sumatoria_pedido_actual;//suma de cada pedido al total del cliente

           } 

        }*/
}
