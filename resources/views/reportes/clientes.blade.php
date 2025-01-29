<x-app-layout>
    <x-slot name="title">Reporte de Clientes Frecuentes</x-slot>
    <x-slot name="nav"><x-layouts.navMain /></x-slot> <!-- Mantener el navbar -->

    @push('linksPropios')
        @vite(['resources/css/reportes.css']) <!-- Asegurar que el CSS personalizado esté vinculado -->
    @endpush

    <main>
        <div class="container my-5">
            <header class="text-center mb-5">
                <h1 class="fw-bold primary-heading">Reporte de Clientes Frecuentes</h1>
                <p class="lead secondary-text">Analiza el comportamiento de tus clientes más frecuentes.</p>
            </header>

            <!-- Formulario para seleccionar el periodo -->
            <form method="GET" action="{{ route('reportes.clientes') }}" class="mb-4">
                <div class="input-group">
                    <select name="periodo" class="form-select">
                        <option value="">Seleccione un periodo</option>
                        <option value="Enero 2024" {{ request('periodo') == 'Enero 2024' ? 'selected' : '' }}>Enero 2024</option>
                        <option value="Febrero 2024" {{ request('periodo') == 'Febrero 2024' ? 'selected' : '' }}>Febrero 2024</option>
                        <option value="Marzo 2024" {{ request('periodo') == 'Marzo 2024' ? 'selected' : '' }}>Marzo 2024</option>
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
                <h3 class="mb-4">Reporte del Periodo: <span class="text-primary">{{ $periodo }}</span></h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Compras</th>
                            <th scope="col">Total (₡)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $cliente)
                            <tr>
                                <td>{{ $cliente['nombre'] }}</td>
                                <td>{{ $cliente['compras'] }}</td>
                                <td>₡ {{ number_format($cliente['total'], 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </main>
</x-app-layout>
