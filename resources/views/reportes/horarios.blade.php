<x-app-layout>
    <x-slot name="title">Reporte de Ventas por Horario</x-slot>
    <x-slot name="nav"><x-layouts.navMain /></x-slot> <!-- Manteniendo el navbar -->

    @push('linksPropios')
        @vite(['resources/css/reportes.css']) <!-- Vincular el CSS personalizado -->
    @endpush

    <main>
        <div class="container my-5">
            <header class="text-center mb-5">
                <h1 class="fw-bold primary-heading">Reporte de Ventas por Horario</h1>
                <p class="lead secondary-text">Consulta los picos de demanda según horarios.</p>
            </header>

            <!-- Formulario para seleccionar rango horario -->
            <form method="GET" action="{{ route('reportes.horarios') }}" class="mb-4">
                <div class="input-group">
                    <select name="rango_horario" class="form-select">
                        <option value="">Seleccione un rango horario</option>
                        <option value="08:00-12:00" {{ request('rango_horario') == '08:00-12:00' ? 'selected' : '' }}>08:00 - 12:00</option>
                        <option value="12:00-16:00" {{ request('rango_horario') == '12:00-16:00' ? 'selected' : '' }}>12:00 - 16:00</option>
                        <option value="16:00-20:00" {{ request('rango_horario') == '16:00-20:00' ? 'selected' : '' }}>16:00 - 20:00</option>
                        <option value="20:00-00:00" {{ request('rango_horario') == '20:00-00:00' ? 'selected' : '' }}>20:00 - 00:00</option>
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
                <h3 class="mb-4">Reporte del Rango Horario: <span class="text-primary">{{ $rango_horario }}</span></h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Hora</th>
                            <th scope="col">Ventas</th>
                            <th scope="col">Ingresos (₡)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $venta)
                            <tr>
                                <td>{{ $venta['hora'] }}</td>
                                <td>{{ $venta['ventas'] }}</td>
                                <td>₡ {{ number_format($venta['ingresos'], 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </main>
</x-app-layout>
