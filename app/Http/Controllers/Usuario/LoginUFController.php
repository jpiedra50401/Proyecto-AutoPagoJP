<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginUFController extends Controller
{
    public function login()
    {
        return view('usuario.login');
    }

    public function registro()
    {
        return view('usuario.registro');
    }

    public function registrar(Request $request)
    {
        dd($request);
        $oUsuario = new User();
        $oUsuario = $request->all();
        $oUsuario->save();
        return redirect()->route('usuario.login');
    }
    
    public function micuenta()
    {
        return view('usuario.micuenta');
    }
    public function editarmicuenta($id)
    {
        return view('usuario.editarmicuenta');
    }
    public function reset()
    {
        return view('usuario.reset');
    }
}
