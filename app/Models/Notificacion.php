<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;

    protected $table = 'notificacion'; // Nombre de la tabla
    protected $primaryKey = 'Id_Notificacion'; // Clave primaria exacta
    public $incrementing = true; // Auto-increment
    protected $keyType = 'int'; // Tipo de clave primaria

    protected $fillable = ['tipo', 'estado', 'mensaje']; // Campos asignables
}
