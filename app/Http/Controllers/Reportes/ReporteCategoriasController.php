<?php

namespace App\Http\Controllers\Reportes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;

class ReporteCategoriasController extends Controller
{
    public function generarReporte(Request $request)
    {
        try {
            // Escenario 3: Simular error de conexión
            $conexionDisponible = true; // Cambiar a false para simular un error de conexión
            if (!$conexionDisponible) {
                throw new Exception('Error de conexión a la base de datos.');
            }

            // Validar si la categoría existe
            $categoriaSeleccionada = $request->input('categoria');
            $categoriasDisponibles = ['Alimentos', 'Bebidas', 'Limpieza', 'Tecnología'];
            if (!in_array($categoriaSeleccionada, $categoriasDisponibles)) {
                return view('reportes.categorias', [
                    'mensaje' => "La categoría '{$categoriaSeleccionada}' no existe.",
                    'datos' => null,
                ]);
            }

            // Escenario 1: Datos disponibles (simulación con datos quemados)
            $datosVentas = [
                'Alimentos' => [
                    ['producto' => 'Arroz Dos Pinos', 'ventas' => 50, 'ingresos' => 25000],
                    ['producto' => 'Frijoles Negros', 'ventas' => 30, 'ingresos' => 15000],
                ],
                'Bebidas' => [
                    ['producto' => 'Coca-Cola', 'ventas' => 40, 'ingresos' => 20000],
                    ['producto' => 'Jugo Del Valle', 'ventas' => 25, 'ingresos' => 12500],
                ],
                'Limpieza' => [
                    ['producto' => 'Cloro Cloralex', 'ventas' => 15, 'ingresos' => 7500],
                ],
                'Tecnología' => [
                    ['producto' => 'Llave Malla', 'ventas' => 5, 'ingresos' => 25000],
                    ['producto' => 'Cargador iphone', 'ventas' => 3, 'ingresos' => 12000],
                ],
            ];

            return view('reportes.categorias', [
                'mensaje' => null,
                'datos' => $datosVentas[$categoriaSeleccionada] ?? [],
                'categoria' => $categoriaSeleccionada,
            ]);
        } catch (Exception $e) {
            // Escenario 3: Mostrar error de conexión
            return view('reportes.categorias', [
                'mensaje' => $e->getMessage(),
                'datos' => null,
            ]);
        }
    }
}
