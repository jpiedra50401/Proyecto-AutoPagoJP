<x-app-layout>
    <x-slot name="title">Reporte de Inventarios Bajos</x-slot>
    <x-slot name="nav"><x-layouts.navMain /></x-slot> <!-- Manteniendo el navbar -->

    @push('linksPropios')
        @vite(['resources/css/reportes.css']) <!-- Incluir el CSS personalizado -->
    @endpush

    <main>
        <div class="container my-5">
            <header class="text-center mb-5">
                <h1 class="fw-bold primary-heading">Reporte de Inventarios Bajos</h1>
                <p class="lead secondary-text">Consulta los productos con inventarios en niveles críticos.</p>
            </header>

            <!-- Botón para generar el reporte -->
            <form method="GET" action="{{ route('reportes.inventarios') }}" class="mb-4 text-center">
                <button type="submit" class="btn btn-primary-action">Generar Reporte</button>
            </form>

            <!-- Mostrar mensajes de error -->
            @if ($mensaje)
                <div class="alert alert-warning text-center" role="alert">
                    <i class="fa-solid fa-exclamation-circle"></i> {{ $mensaje }}
                </div>
            @endif

            <!-- Mostrar productos si hay datos -->
            @if ($datos)
                <div class="table-responsive mt-4">
                    <h3 class="text-center mb-4">Productos con Inventarios Críticos</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Producto</th>
                                <th scope="col">Stock Actual</th>
                                <th scope="col">Stock Mínimo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datos as $producto)
                                <tr>
                                    <td>{{ $producto['producto'] }}</td>
                                    <td>{{ $producto['stock'] }}</td>
                                    <td>{{ $producto['stock_minimo'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </main>
</x-app-layout>
