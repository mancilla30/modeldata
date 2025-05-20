<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table='notas';

    protected $fillable=[
        'titulo',
        'descripcion',
        'fecha',
        'completado'
    ];
    
    /**
     * Scope que filtra las notas que están completadas.
     * Esta función permite consultar solo las notas donde completado = true.
     */
    public function scopeCompletado($query)
    {
        return $query->where('completado', true);
    }
}
