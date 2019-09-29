<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
      protected $table = 'categorias';

    protected $fillable = [
        'nombre',
        'pelicula_id',
        
    ];

     public function pelicula()
    {
        return $this->belongsTo('App\Models\Pelicula');
    }
}
