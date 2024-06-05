<?php

namespace App\Models;

use CodeIgniter\Model;

class PedidoModel extends Model
{
    protected $table      = 'pedido';
    protected $primaryKey = 'id_pedido ';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields =['id_pedido', 'created_by', 'creaded_at', 'updated_by', 'updated_at', 'fecha', 'Estado', 'Cliente_id_cliente '];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
}