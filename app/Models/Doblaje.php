<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doblaje extends Model
{
    protected $table = 'doblajes';

    protected $fillable = [
        'nombre',
    ];

    public function peliculas()
    {
        return $this->hasMany('App\Models\Pelicula');
    }

    public function categorias()
    {
        return $this->hasManyThrough('App\Models\Categoria', 'App\Models\Pelicula');
    }

    public function likes()
    {
        return $this->morphMany('App\Models\Like', 'likable');
    }
}
