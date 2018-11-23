<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable = [
        'nombre', 'editorial', 'año', 'ubicacion', 'autor', 'tipo', 'area', 'dias_prestamo'
    ];

    public function scopeSearch($query, $buscar){
        return $query->where('nombre', 'LIKE', "%$buscar%");
    }
}
