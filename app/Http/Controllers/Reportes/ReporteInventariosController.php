<?php

namespace App\Http\Controllers\Reportes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;

class ReporteInventariosController extends Controller
{
    public function generarReporte(Request $request)
    {
        try {
            // Escenario 3: Simular error de permisos
            $tienePermisos = true; // Cambiar a false para simular el error de permisos
            if (!$tienePermisos) {
                throw new Exception('No tienes permisos para acceder a este reporte.');
            }

            // Escenario 2: Simular datos faltantes
            $hayDatos = true; // Cambiar a false para simular que no hay productos con inventarios bajos
            if (!$hayDatos) {
                return view('reportes.inventarios', [
                    'mensaje' => 'No hay productos con inventarios bajos.',
                    'datos' => null,
                ]);
            }

            // Escenario 1: Datos disponibles (simulación con datos quemados)
            $productosConInventariosBajos = [
                ['producto' => 'Cereal Kellogg\'s Corn Flakes', 'stock' => 2, 'stock_minimo' => 5],
                ['producto' => 'Jugo Del Valle Naranja', 'stock' => 1, 'stock_minimo' => 3],
                ['producto' => 'Leche Dos Pinos Entera', 'stock' => 4, 'stock_minimo' => 6],
                ['producto' => 'Pasta Barilla Spaghetti', 'stock' => 3, 'stock_minimo' => 8],
                ['producto' => 'Detergente Ariel 1.5kg', 'stock' => 1, 'stock_minimo' => 2],
            ];

            return view('reportes.inventarios', [
                'mensaje' => null,
                'datos' => $productosConInventariosBajos,
            ]);
        } catch (Exception $e) {
            return view('reportes.inventarios', [
                'mensaje' => $e->getMessage(),
                'datos' => null,
            ]);
        }
    }
}
