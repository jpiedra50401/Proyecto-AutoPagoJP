<x-app-layout>
    <x-slot name="title">Reporte de Ventas por Promociones</x-slot>

    <!-- Incluir el navbar -->
    <x-slot name="nav"><x-layouts.navMain /></x-slot>

    <!-- Enlace al archivo CSS personalizado -->
    @push('linksPropios')
        @vite(['resources/css/reportes.css']) <!-- Aseguramos cargar el CSS correcto -->
    @endpush

    <main>
        <div class="container my-5">
            <header class="text-center mb-5">
                <h1 class="fw-bold primary-heading">Reporte de Ventas por Promociones</h1>
                <p class="lead secondary-text">Consulta el impacto de las promociones en las ventas.</p>
            </header>

            <!-- Formulario para seleccionar promoción -->
            <form method="GET" action="{{ route('reportes.promociones') }}" class="mb-4">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <label for="promocion" class="form-label">Seleccionar Promoción</label>
                        <select class="form-select" name="promocion" id="promocion" required>
                            <option value="" disabled selected>Seleccione una Promoción</option>
                            <option value="Descuento Navidad" {{ request('promocion') == 'Descuento Navidad' ? 'selected' : '' }}>Descuento Navidad</option>
                            <option value="Black Friday" {{ request('promocion') == 'Black Friday' ? 'selected' : '' }}>Black Friday</option>
                            <option value="Cyber Monday" {{ request('promocion') == 'Cyber Monday' ? 'selected' : '' }}>Cyber Monday</option>
                        </select>
                    </div>
                    <div class="col-md-3 align-self-end">
                        <button type="submit" class="btn btn-primary-action w-100">Generar Reporte</button>
                    </div>
                </div>
            </form>

            <!-- Mostrar mensajes -->
            @if ($mensaje)
                <div class="alert alert-warning text-center mt-4" role="alert">
                    <i class="fa-solid fa-exclamation-circle"></i> {{ $mensaje }}
                </div>
            @endif

            <!-- Mostrar datos de ventas -->
            @if ($datos)
                <h2 class="mt-5">Resultados de la Promoción: <span class="text-primary">{{ $promocion }}</span></h2>
                <table class="table table-hover mt-3">
                    <thead>
                        <tr>
                            <th scope="col">Producto</th>
                            <th scope="col">Ventas</th>
                            <th scope="col">Ingresos</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $venta)
                            <tr>
                                <td>{{ $venta['producto'] }}</td>
                                <td>{{ $venta['ventas'] }}</td>
                                <td>₡{{ number_format($venta['ingresos'], 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </main>
</x-app-layout>
