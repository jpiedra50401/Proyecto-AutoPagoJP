<?php

namespace App\Http\Controllers\Reportes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;

class ReportePromocionesController extends Controller
{
    public function generarReporte(Request $request)
    {
        try {
            // Escenario 3: Simular error por falta de permisos
            $tienePermisos = true; // Cambiar a false para simular la falta de permisos
            if (!$tienePermisos) {
                throw new Exception('No tienes permisos para acceder a este reporte.');
            }

            // Validar si hay datos asociados a la promoción seleccionada
            $promocionSeleccionada = $request->input('promocion');
            $promocionesDisponibles = ['Descuento Navidad', 'Black Friday', 'Cyber Monday'];
            if (!in_array($promocionSeleccionada, $promocionesDisponibles)) {
                return view('reportes.promociones', [
                    'mensaje' => "La promoción '{$promocionSeleccionada}' no tiene datos disponibles.",
                    'datos' => null,
                ]);
            }

            // Escenario 2: Simular falta de datos
            $hayDatos = true; // Cambiar a false para simular falta de datos
            if (!$hayDatos) {
                return view('reportes.promociones', [
                    'mensaje' => 'No hay información disponible para la promoción seleccionada.',
                    'datos' => null,
                ]);
            }

            // Escenario 1: Datos disponibles (simulación con datos quemados)
            $ventasPromocionales = [
                'Descuento Navidad' => [
                    ['producto' => 'Bebida Jet', 'ventas' => 50, 'ingresos' => 25000],
                    ['producto' => 'Chocolate Hershey\'s', 'ventas' => 30, 'ingresos' => 90000],
                ],
                'Black Friday' => [
                    ['producto' => 'Masa 1kg', 'ventas' => 15, 'ingresos' => 1200],
                    ['producto' => 'Cereal Trijuelas grande', 'ventas' => 20, 'ingresos' => 2000],
                ],
                'Cyber Monday' => [
                    ['producto' => 'Coca-Cola 2 Litros', 'ventas' => 10, 'ingresos' => 250000],
                ],
            ];

            return view('reportes.promociones', [
                'mensaje' => null,
                'datos' => $ventasPromocionales[$promocionSeleccionada] ?? [],
                'promocion' => $promocionSeleccionada,
            ]);
        } catch (Exception $e) {
            return view('reportes.promociones', [
                'mensaje' => $e->getMessage(),
                'datos' => null,
            ]);
        }
    }
}
