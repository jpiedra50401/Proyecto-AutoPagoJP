<?php

namespace App\Http\Controllers\Reportes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;

class ReporteClientesController extends Controller
{
    public function generarReporte(Request $request)
    {
        try {
            // Escenario 3: Simular error de permisos
            $tienePermisos = true; // Cambiar a false para simular error de permisos
            if (!$tienePermisos) {
                throw new Exception('No tiene acceso al módulo de clientes.');
            }

            // Validar si hay datos para el periodo seleccionado
            $periodo = $request->input('periodo');
            $periodosDisponibles = ['Enero 2024', 'Febrero 2024', 'Marzo 2024'];
            if (!in_array($periodo, $periodosDisponibles)) {
                return view('reportes.clientes', [
                    'mensaje' => 'No hay información disponible para el periodo seleccionado.',
                    'datos' => null,
                ]);
            }

            // Escenario 1: Datos disponibles (simulación con datos quemados)
            $clientesFrecuentes = [
                'Enero 2024' => [
                    ['nombre' => 'Juan Pérez', 'compras' => 12, 'total' => 24000],
                    ['nombre' => 'Ana Rodríguez', 'compras' => 10, 'total' => 20000],
                ],
                'Febrero 2024' => [
                    ['nombre' => 'Carlos Morales', 'compras' => 8, 'total' => 16000],
                    ['nombre' => 'María López', 'compras' => 7, 'total' => 14000],
                ],
                'Marzo 2024' => [
                    ['nombre' => 'Sofía Herrera', 'compras' => 15, 'total' => 30000],
                    ['nombre' => 'Luis Ramírez', 'compras' => 9, 'total' => 18000],
                ],
            ];

            return view('reportes.clientes', [
                'mensaje' => null,
                'datos' => $clientesFrecuentes[$periodo] ?? [],
                'periodo' => $periodo,
            ]);
        } catch (Exception $e) {
            // Escenario 3: Mostrar error de permisos
            return view('reportes.clientes', [
                'mensaje' => $e->getMessage(),
                'datos' => null,
            ]);
        }
    }
}
