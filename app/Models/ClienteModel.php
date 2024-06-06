<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{
    protected $table      = 'cliente';
    protected $primaryKey = 'cedula';

    protected $useAutoIncrement = True;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields =['cedula', 'nombre', 'apellido', 'correo', 'contrasena', 'teléfono','Area_id_area','Empresa_nit'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
}