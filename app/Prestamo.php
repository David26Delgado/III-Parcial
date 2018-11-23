<?php

namespace App;

use App\Libro;
use App\Estudiante;
use App\Empleado;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $fillable = [
        'id_libro', 'id_estudiante', 'id_empleado', 'prestamo', 'entrega'
    ];

    public function id_libro(){
        return $this->belongsTo(Libro::class, 'id_libro');
    }
    public function id_estudiante(){
        return $this->belongsTo(Estudiante::class, 'id_estudiante');
    }
    public function id_empleado(){
        return $this->belongsTo(Empleado::class, 'id_empleado');
    }
}
