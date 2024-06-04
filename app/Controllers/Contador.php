<?php

namespace App\Controllers;


class Contador extends BaseController
{
    public function login()
    {
        return view('contador/contador');
    }
    
    public function consultar_informe($fecha_inicial, $fecha_final)
    {
        $fecha_inicial=$fecha_inicial;
        $fecha_final=$fecha_final;
        $coneccion_bd=/Config/Database::conect();
        $query=$coneccion_bd->query("  SELECT 
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
        $resultado_query=$coneccion_bd->getResult();

        $data =['titulo'=>'Informe de Ventas', 'ventas'=>$resultado_query];
        return view('contador/Informe_de_ventas');
    }
}
