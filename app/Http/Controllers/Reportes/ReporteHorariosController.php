<?php

namespace App\Http\Controllers\Reportes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;

class ReporteHorariosController extends Controller
{
    public function generarReporte(Request $request)
    {
        try {
            // Escenario 3: Simular error de conexión
            $conexionDisponible = true; // Cambiar a false para simular un error de conexión
            if (!$conexionDisponible) {
                throw new Exception('Error de conexión a la base de datos.');
            }

            // Validar si hay datos para el rango horario seleccionado
            $rangoHorario = $request->input('rango_horario');
            $horariosDisponibles = ['08:00-12:00', '12:00-16:00', '16:00-20:00', '20:00-00:00'];
            if (!in_array($rangoHorario, $horariosDisponibles)) {
                return view('reportes.horarios', [
                    'mensaje' => 'No hay información disponible para el rango horario seleccionado.',
                    'datos' => null,
                ]);
            }

            // Escenario 1: Datos disponibles (simulación con datos quemados)
            $datosVentas = [
                '08:00-12:00' => [
                    ['hora' => '09:00', 'ventas' => 15, 'ingresos' => 7500],
                    ['hora' => '11:00', 'ventas' => 20, 'ingresos' => 10000],
                ],
                '12:00-16:00' => [
                    ['hora' => '13:00', 'ventas' => 25, 'ingresos' => 12500],
                    ['hora' => '15:00', 'ventas' => 18, 'ingresos' => 9000],
                ],
                '16:00-20:00' => [
                    ['hora' => '17:00', 'ventas' => 30, 'ingresos' => 15000],
                    ['hora' => '19:00', 'ventas' => 22, 'ingresos' => 11000],
                ],
                '20:00-00:00' => [
                    ['hora' => '21:00', 'ventas' => 12, 'ingresos' => 6000],
                    ['hora' => '23:00', 'ventas' => 8, 'ingresos' => 4000],
                ],
            ];

            return view('reportes.horarios', [
                'mensaje' => null,
                'datos' => $datosVentas[$rangoHorario] ?? [],
                'rango_horario' => $rangoHorario,
            ]);
        } catch (Exception $e) {
            // Escenario 3: Mostrar error de conexión
            return view('reportes.horarios', [
                'mensaje' => $e->getMessage(),
                'datos' => null,
            ]);
        }
    }
}
