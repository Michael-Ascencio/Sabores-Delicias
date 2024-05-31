<?php

namespace App\Models;

use CodeIgniter\Model;

class TiendasModel extends Model
{
    protected $table      = 'tienda';
    protected $primaryKey = 'cod_postal';

    protected $useAutoIncrement = false;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields =['cod_postal', 'nombre', 'dirección', 'ubicacion', 'correo', 'teléfono'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
}