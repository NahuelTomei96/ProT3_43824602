<?php
namespace App\Models;

use CodeIgniter\Model;

class usuario_models extends Model {
    
    protected $table = 'usuarios'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_usuario'; // Nombre de la clave primaria
    protected $allowedFields = ['nombre', 'apellido', 'usuario', 'email', 'pass', 'baja', 'created_at']; // Campos permitidos para inserción y actualización
    
}
