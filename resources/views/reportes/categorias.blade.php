<x-app-layout>
    <x-slot name="title">Reporte de Ventas por Categoría</x-slot>
    <x-slot name="nav"><x-layouts.navMain /></x-slot> <!-- Mantener el navbar -->

    @push('linksPropios')
        @vite(['resources/css/reportes.css']) <!-- Incluir el CSS correcto -->
    @endpush

    <main>
        <div class="container my-5">
            <header class="text-center mb-5">
                <h1 class="fw-bold primary-heading">Reporte de Ventas por Categoría</h1>
                <p class="lead secondary-text">Analiza las ventas por línea de productos.</p>
            </header>

            <!-- Formulario para seleccionar categoría -->
            <form method="GET" action="{{ route('reportes.categorias') }}" class="mb-4">
                <div class="input-group">
                    <select name="categoria" class="form-select">
                        <option value="">Seleccione una categoría</option>
                        <option value="Alimentos" {{ request('categoria') == 'Alimentos' ? 'selected' : '' }}>Alimentos</option>
                        <option value="Bebidas" {{ request('categoria') == 'Bebidas' ? 'selected' : '' }}>Bebidas</option>
                        <option value="Limpieza" {{ request('categoria') == 'Limpieza' ? 'selected' : '' }}>Limpieza</option>
                        <option value="Tecnología" {{ request('categoria') == 'Tecnología' ? 'selected' : '' }}>Tecnología</option>
                    </select>
                    <button type="submit" class="btn btn-primary-action ms-2">Generar Reporte</button>
                </div>
            </form>

            <!-- Mostrar mensajes -->
            @if ($mensaje)
                <div class="alert alert-warning text-center" role="alert">
                    <i class="fa-solid fa-exclamation-circle"></i> {{ $mensaje }}
                </div>
            @endif

            <!-- Mostrar datos -->
            @if ($datos)
                <h3 class="mb-4">Categoría: <span class="text-primary">{{ $categoria }}</span></h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Producto</th>
                            <th scope="col">Ventas</th>
                            <th scope="col">Ingresos</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $producto)
                            <tr>
                                <td>{{ $producto['producto'] }}</td>
                                <td>{{ $producto['ventas'] }}</td>
                                <td>₡ {{ number_format($producto['ingresos'], 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </main>
</x-app-layout>
