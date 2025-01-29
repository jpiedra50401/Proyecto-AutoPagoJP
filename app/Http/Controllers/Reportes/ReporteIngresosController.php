<?php

namespace App\Http\Controllers\Reportes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Maatwebsite\Excel\Facades\Excel;

class ReporteIngresosController extends Controller
{
    public function generarReporte(Request $request)
    {
        try {
            // Escenario 3: Simular error de conexión
            $conexionDisponible = true; // Cambia a false para simular error de conexión
            if (!$conexionDisponible) {
                throw new Exception('No se puede acceder a los datos en este momento. Intenta más tarde.');
            }

            // Validar mes seleccionado
            $mes = $request->input('mes');
            if (!$mes) {
                return view('reportes.ingresos', [
                    'mensaje' => 'Por favor, selecciona un mes válido.',
                    'datos' => null,
                ]);
            }

            // Escenario 2: Simular datos faltantes
            $datosDisponibles = true; // Cambia a false para simular que no hay datos
            if (!$datosDisponibles) {
                return view('reportes.ingresos', [
                    'mensaje' => 'No hay datos disponibles para el mes seleccionado.',
                    'datos' => null,
                ]);
            }

            // Escenario 1: Generar archivo Excel con datos quemados
            $ingresos = [
                ['Día' => '01', 'Ingreso' => 15000],
                ['Día' => '02', 'Ingreso' => 12000],
                ['Día' => '03', 'Ingreso' => 18000],
            ];

            // Generar archivo Excel
            $nombreArchivo = 'Reporte_Ingresos_' . $mes . '.xlsx';
            return Excel::download(new \App\Exports\IngresosExport($ingresos), $nombreArchivo);
        } catch (Exception $e) {
            // Escenario 3: Mostrar error de conexión
            return view('reportes.ingresos', [
                'mensaje' => $e->getMessage(),
                'datos' => null,
            ]);
        }
    }
}
