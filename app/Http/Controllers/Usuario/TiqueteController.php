<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TiqueteController extends Controller
{
    public function tiquete()
    {
        return view('usuario.tiquete');
    }
}
