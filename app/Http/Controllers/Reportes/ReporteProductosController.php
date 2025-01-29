<?php

namespace App\Http\Controllers\Reportes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;

class ReporteProductosController extends Controller
{
    public function generarReporte(Request $request)
    {
        try {
            // Escenario 3: Verificar permisos
            $usuarioTienePermisos = true; // Cambia a false para simular falta de permisos
            if (!$usuarioTienePermisos) {
                throw new Exception('No tienes permisos para generar este reporte.');
            }

            // Escenario 2: Validar rango de fechas
            $fechaInicio = $request->input('fecha_inicio');
            $fechaFin = $request->input('fecha_fin');

            if (!$this->validarRangoFechas($fechaInicio, $fechaFin)) {
                return view('reportes.productos', [
                    'mensaje' => 'El rango de fechas ingresado no es válido. Por favor, corrige las fechas.',
                    'datos' => null,
                ]);
            }

            // Escenario 1: Generar reporte con datos quemados
            $productos = [
                ['producto' => 'Cafe Rey', 'cantidad' => 120],
                ['producto' => 'RedBull', 'cantidad' => 90],
                ['producto' => 'Coca-Cola', 'cantidad' => 70],
            ];

            return view('reportes.productos', [
                'mensaje' => null,
                'datos' => $productos,
                'fechaInicio' => $fechaInicio,
                'fechaFin' => $fechaFin,
            ]);
        } catch (Exception $e) {
            // Error de permisos
            return view('reportes.productos', [
                'mensaje' => $e->getMessage(),
                'datos' => null,
            ]);
        }
    }

    private function validarRangoFechas($inicio, $fin)
    {
        if (!$inicio || !$fin) {
            return false;
        }

        $fechaInicio = strtotime($inicio);
        $fechaFin = strtotime($fin);

        return $fechaInicio <= $fechaFin; // Asegura que la fecha de inicio no sea posterior a la fecha final
    }
}
