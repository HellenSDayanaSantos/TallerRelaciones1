<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doblaje;
use App\Models\Pelicula;
use App\Models\Categoria;

class LikeController extends Controller
{
    public function consultarCategoria()
    {
       $categoria = Categoria::find(1);
       //return csrf_token();
       return $categoria->likes;
    }

    public function guardarCategoria()
	{
		$categoria = Categoria::find(1);
        
		$categoria->likes()->create(['me_gusta' => 'SI']);
	}

	public function consultarDoblaje()
	{
		$doblaje = Doblaje::find(1);
        return $doblaje->likes;
	}

	public function guardarDoblaje()
	{
		$doblaje = Doblaje::find(1);
        
		$doblaje->likes()->createMany([
			['me_gusta' => 'SI'],
			['me_gusta' => 'NO'],
			['me_gusta' => 'SI'],
			['me_gusta' => 'NO']
		]);
	}

	public function consultarPelicula()
	{
		$pelicula = Pelicula::find(1);
        return $pelicula->likes;
	}

	public function guardarPelicula()
	{
		$pelicula = Pelicula::find(1);
        
		$pelicula->likes()->createMany([
			['me_gusta' => 'SI'],
			['me_gusta' => 'NO'],
			['me_gusta' => 'SI'],
			['me_gusta' => 'SI']
		]);
	}
}
