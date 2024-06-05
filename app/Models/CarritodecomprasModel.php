<?php

namespace App\Models;

use CodeIgniter\Model;

class Carritodecompras extends Model
{
    protected $table      = 'pedido';
    protected $primaryKey = 'id_pedido';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields =['created_by', 'fecha'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
}