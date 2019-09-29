<?php

namespace App\Http\Controllers;

use App\Models\Doblaje;
use App\Models\Pelicula;

class DoblajeController extends Controller
{
    public function index()
    {
       $doblaje = Doblaje::with('peliculas')->get();
       return $doblaje;
    }

    public function store()
    {
        $doblaje = new Doblaje;

        $doblaje->nombre = 'Latino';

        $doblaje->save();

        $doblaje->peliculas()->saveMany([
            new Pelicula([
                'titulo' => 'Toy Story 4',
                'sipnosis' => 'Pelicula animada...',
                'duracion' => '2:13:00',
                'clasificacion' => '12',
                'puntuacion' => '4/5',
            ]),
            new Pelicula([
                'titulo' => 'Titanic',
                'sipnosis' => 'Pelicula drama...',
                'duracion' => '3:13:00',
                'clasificacion' => '16',
                'puntuacion' => '4/5',
            ]),
        ]);
    }

    public function getCategorias()
    {
        $doblaje = Doblaje::with('categorias')->get();
        return $doblaje;
    }
}
