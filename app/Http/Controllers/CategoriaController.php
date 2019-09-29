<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;

class CategoriaController extends Controller
{
    public function index()
    {
        $pelicula = Pelicula::with('categorias')->get();
        return $pelicula;
    }

    public function store()
    {
        $pelicula = Pelicula::find(1);

        $pelicula->categorias()->createMany([
            [
                'nombre' => 'Infantil',
            ],
            [
                'nombre' => 'Animacion',
            ],
        ]);
    }
}
