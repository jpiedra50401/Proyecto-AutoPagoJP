<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuscaproductosController extends Controller
{
    public function buscaproductos()
    {
        return view('usuario.buscarproductos');
    }
}
