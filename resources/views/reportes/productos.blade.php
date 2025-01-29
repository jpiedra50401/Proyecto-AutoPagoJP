<x-app-layout>
    <x-slot name="title">Reporte de Productos Más Vendidos</x-slot>

    @push('linksPropios')
        @vite(['resources/css/reportes.css'])
    @endpush

    @push('scriptsPropios')
        @vite(['resources/js/reportes.js'])
    @endpush

    <x-slot name="nav">
        <x-layouts.navMain /> <!-- Siempre mantiene el navbar -->
    </x-slot>

    <main>
        <div class="container my-5">
            <header class="text-center mb-5">
                <h1 class="fw-bold primary-heading">Reporte Semanal de Productos Más Vendidos</h1>
                <p class="lead secondary-text">Selecciona un rango de fechas para generar el reporte.</p>
            </header>

            <!-- Formulario de fechas -->
            <form method="GET" action="{{ route('reportes.productos') }}" class="mb-4">
                <div class="row g-3 justify-content-center">
                    <div class="col-md-4">
                        <label for="fecha_inicio" class="form-label">Fecha Inicio</label>
                        <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="fecha_fin" class="form-label">Fecha Fin</label>
                        <input type="date" name="fecha_fin" id="fecha_fin" class="form-control" required>
                    </div>
                    <div class="col-md-2 align-self-end">
                        <button type="submit" class="btn btn-primary-action w-100">Generar Reporte</button>
                    </div>
                </div>
            </form>

            @if ($mensaje)
                <div class="alert alert-warning text-center" role="alert">
                    <i class="fa-solid fa-exclamation-circle"></i> {{ $mensaje }}
                </div>
            @else
                <div class="mb-4">
                    <h4 class="fw-bold">Periodo: {{ $fechaInicio }} a {{ $fechaFin }}</h4>
                </div>

                <table class="table table-bordered text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad Vendida</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $producto)
                            <tr>
                                <td>{{ $producto['producto'] }}</td>
                                <td>{{ $producto['cantidad'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </main>
</x-app-layout>
