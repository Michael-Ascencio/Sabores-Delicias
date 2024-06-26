<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{
    protected $table      = 'detallepedido';
    protected $primaryKey = 'id_detalle';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields =['id_detalle', 'Estado', 'created_by', 'creaded_at', 'updated_by', 'updated_at', 'Pedido_id_pedido', 'Refrigerio_has_Producto_Refrigerio_idRefrigerio1 ', 'cantidad_de_producto','Refrigerio_has_Producto_Producto_id_producto1 '];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
}