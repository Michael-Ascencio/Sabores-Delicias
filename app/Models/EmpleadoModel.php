<?php

namespace App\Models;

use CodeIgniter\Model;

class EmpleadoModel extends Model
{
    protected $table      = 'Empleado';
    protected $primaryKey = 'cedula';

    protected $useAutoIncrement = True;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields =['cedula', 'nombre', 'apellido', 'contrasena', 'correo', 'teléfono','Cargo_id_cargo', 'Tienda_cod_postal'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
}