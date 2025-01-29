<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notificacion;

class MensajesController extends Controller
{
    public function mensajes(Request $request)
{
    try {
        // Obtener el término de búsqueda, si existe
        $search = $request->input('search');

        if ($search) {
            // Filtrar las notificaciones según el término de búsqueda
            $notificaciones = Notificacion::where('Mensaje', 'like', '%' . $search . '%')
                ->orWhere('Tipo', 'like', '%' . $search . '%')
                ->orWhere('Estado', 'like', '%' . $search . '%')
                ->get();
        } else {
            // Obtener todas las notificaciones si no hay búsqueda
            $notificaciones = Notificacion::all();
        }

        return view('admin.mensajes', compact('notificaciones', 'search'));
    } catch (\Exception $e) {
        return redirect()->route('admin.mensajes')
            ->with('error', 'Ocurrió un error al cargar las notificaciones.');
    }
}


    public function crearmensajes()
    {
        try {
            return view('admin.crearmensajes');
        } catch (\Exception $e) {
            // Manejo de errores
            return redirect()->route('admin.mensajes')
                ->with('error', 'Ocurrió un error al cargar el formulario de creación: ' . $e->getMessage());
        }
    }

    public function editarmensaje($id)
    {
        try {
            // Buscar la notificación por ID
            $notificacion = Notificacion::findOrFail($id);

            // Pasar la notificación a la vista
            return view('admin.editarmensajes', compact('notificacion'));
        } catch (\Exception $e) {
            // Manejo de errores
            return redirect()->route('admin.mensajes')
                ->with('error', 'Ocurrió un error al cargar la notificación para edición: ' . $e->getMessage());
        }
    }

    public function guardarMensaje(Request $request)
    {
        try {
            // Validación de datos
            $request->validate([
                'tipo' => 'required|string|max:50',
                'estado' => 'required|string|max:20',
                'mensaje' => 'required|string|max:255',
            ]);

            // Crear la notificación
            Notificacion::create($request->only(['tipo', 'estado', 'mensaje']));

            // Redirigir con éxito
            return redirect()->route('admin.mensajes')
                ->with('success', 'Notificación creada con éxito.');
        } catch (\Exception $e) {
            // Manejo de errores
            return redirect()->route('admin.crearmensajes')
                ->with('error', 'Ocurrió un error al guardar la notificación: ' . $e->getMessage());
        }
    }

    public function actualizarMensaje(Request $request, $id)
    {
        try {
            // Validación de datos
            $request->validate([
                'tipo' => 'required|string|max:50',
                'estado' => 'required|string|max:20',
                'mensaje' => 'required|string|max:255',
            ]);

            // Buscar y actualizar la notificación
            $notificacion = Notificacion::findOrFail($id);
            $notificacion->update($request->only(['tipo', 'estado', 'mensaje']));

            return redirect()->route('admin.mensajes')
                ->with('success', 'Notificación actualizada con éxito.');
        } catch (\Exception $e) {
            // Manejo de errores
            return redirect()->route('admin.editarmensaje', ['id' => $id])
                ->with('error', 'Ocurrió un error al actualizar la notificación: ' . $e->getMessage());
        }
    }

    public function eliminarMensaje($id)
    {
        try {
            // Buscar y eliminar la notificación
            $notificacion = Notificacion::findOrFail($id);
            $notificacion->delete();

            return redirect()->route('admin.mensajes')
                ->with('success', 'Notificación eliminada con éxito.');
        } catch (\Exception $e) {
            // Manejo de errores
            return redirect()->route('admin.mensajes')
                ->with('error', 'Ocurrió un error al eliminar la notificación: ' . $e->getMessage());
        }
    }

    
}
