<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $fillable = [
        'nombre', 'apellido', 'cedula', 'correo'
    ];
}
