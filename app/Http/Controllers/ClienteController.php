<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Tarjeta;

class ClienteController extends Controller
{
    public function index()
    {
        $cliente = Cliente::with('tarjeta')->get();
        //return $cliente;
        return csrf_token();
    }

    public function store()
    {
      
        $cliente = new Cliente;

        $cliente->nombres = 'Sebastian Montiel';
        $cliente->correo = 'seba@hotmail.com';
        $cliente->genero = 'M';
        $cliente->edad = 25;

        $cliente->save();

        $tarjeta = new Tarjeta;

        $tarjeta->banco = 'calle 47 # 12-32';
        $tarjeta->nro_tarjeta = '4567-6543';
        
        $cliente->tarjeta()->save($tarjeta);

    }

    public function storeRentasAttach()
    {
        $cliente = Cliente::find(1);

        $cliente->peliculas()->attach([1, 2]);

    }

    public function storeRentasSync()
    {
        $cliente = Cliente::find(1);

        $cliente->peliculas()->sync([2]);
    }
}
