<?php

namespace App\Http\Controllers\Reportes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;

class ReporteVentasController extends Controller
{
    public function generarReporte(Request $request)
    {
        try {
            $conexionDisponible = true; 
            if (!$conexionDisponible) {
                throw new Exception('Error de conexión a la base de datos.');
            }

            $datosDisponibles = true; 
            if (!$datosDisponibles) {
                return view('reportes.ventas', [
                    'mensaje' => 'No hay datos disponibles para el día seleccionado.',
                    'datos' => null,
                ]);
            }

            $ventas = [
                ['producto' => 'Leche', 'cantidad' => 10, 'total' => 10000.00],
                ['producto' => 'Melcochon', 'cantidad' => 5, 'total' => 4000.00],
                ['producto' => 'Cigarros', 'cantidad' => 3, 'total' => 6000.00],
            ];

            return view('reportes.ventas', [
                'mensaje' => null,
                'datos' => $ventas,
            ]);
        } catch (Exception $e) {
            return view('reportes.ventas', [
                'mensaje' => $e->getMessage(),
                'datos' => null,
            ]);
        }
    }
}
