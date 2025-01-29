<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DescuentosController extends Controller
{
    public function descuentos()
    {
        return view('admin.descuentos');
    }
    public function creardescuentos()
    {
        return view('admin.creardescuentos');
    }
    public function editardescuentos()
    {
        return view('admin.editardescuentos');
    }
}
