<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EscaneoController extends Controller
{
    public function escaneo()
    {
        return view('usuario.escaneo');
    }
}
