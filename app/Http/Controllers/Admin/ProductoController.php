<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function producto()
    {
                $producto = Producto::all();
                return view('admin.producto', compact('producto'));
    }
    
    public function crearproducto(Request $request)
    {
        if ($request->isMethod('post')) {
            $validatedData = $request->validate([
                'Nombre_Producto' => 'required|string|max:100',
                'Marca' => 'required|string|max:100',
                'Stock' => 'nullable|integer|min:0',
                'Descripcion' => 'required|string|max:300',
                'Precio' => 'required|numeric|min:0',
            ]);
        
            Producto::create($validatedData);
        
            return redirect()->route('admin.producto')->with('success', 'Producto creado correctamente.');
        }
    
        return view('admin.crearproducto');
    }
    
    
    public function editarproducto(Request $request, $Id_Producto)
    {
        $producto = Producto::findOrFail($Id_Producto);
    
        if ($request->isMethod('post')) {
            $validatedData = $request->validate([
                'Nombre_Producto' => 'required|string|max:100',
                'Marca' => 'required|string|max:100',
                'Stock' => 'nullable|integer|min:0',
                'Descripcion' => 'required|string|max:300',
                'Precio' => 'required|numeric|min:0',
            ]);
    
            $producto->update($validatedData);
    
            return redirect()->route('admin.producto')->with('success', 'Producto actualizado correctamente.');
        }

        return view('admin.editarproducto', compact('producto'));
    }

    public function eliminarProducto($Id_Producto)
    {
        $producto = Producto::findOrFail($Id_Producto);

        $productoNombre = $producto->Nombre_Producto;
    
        $producto->delete();
    
        return redirect()->route('admin.producto')->with('success', "Producto '$productoNombre' eliminado correctamente.");
    }
    
    
}
