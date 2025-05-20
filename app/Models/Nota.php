<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    // protected $table = 'nombre_tabla';     // Define el nombre de la tabla en la base de datos
    // protected $fillable = [];              // Define qué campos pueden ser llenados masivamente
    // protected $guarded = [];               // Define qué campos NO pueden ser llenados masivamente
    // protected $casts = [];                 // Define cómo se deben convertir los campos al recuperarlos de la BD encriptados
    // protected $hidden = [];                // Define qué atributos deben ocultarse en la serialización
    // protected $table = 'notas';            // En este caso, define que la tabla se llama 'notas'

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
