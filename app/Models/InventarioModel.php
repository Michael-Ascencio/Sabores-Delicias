<?php

namespace App\Models;

use CodeIgniter\Model;

class InventarioModel extends Model
{
    protected $table      = 'inventario';
    protected $primaryKey = 'id_inventario';

    protected $useAutoIncrement = True;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields =['id_inventario', 'cantidad', 'lote', 'fecha_caducidad', 'Producto_id_producto', 'Tienda_cod_postal'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';

}