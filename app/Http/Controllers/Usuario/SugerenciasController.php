<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SugerenciasController extends Controller
{
    public function sugerencias()
    {
        return view('usuario.sugerencias');
    }
}
