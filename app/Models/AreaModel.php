<?php

namespace App\Models;

use CodeIgniter\Model;

class AreaModel extends Model
{
    protected $table      = 'area';
    protected $primaryKey = 'id_area';

    protected $useAutoIncrement = True;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields =['id_area', 'nombre'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
}