<x-app-layout>
    <x-slot name="title">Reporte Mensual de Ingresos</x-slot>
    <x-slot name="nav"><x-layouts.navMain /></x-slot> <!-- Manteniendo el navbar -->

    @push('linksPropios')
        @vite(['resources/css/reportes.css'])
    @endpush

    <main>
        <div class="container my-5">
            <header class="text-center mb-5">
                <h1 class="fw-bold primary-heading">Reporte Mensual de Ingresos</h1>
                <p class="lead secondary-text">Selecciona un mes para generar el reporte de ingresos.</p>
            </header>

            <!-- Formulario para seleccionar el mes -->
            <form method="GET" action="{{ route('reportes.ingresos') }}" class="mb-4">
                <div class="row g-3 justify-content-center">
                    <div class="col-md-4">
                        <label for="mes" class="form-label secondary-text">Mes</label>
                        <input 
                            type="month" 
                            name="mes" 
                            id="mes" 
                            class="form-control" 
                            value="{{ request('mes') }}" <!-- Persistencia de selección -->
                            required
                        >
                    </div>
                    <div class="col-md-2 align-self-end">
                        <button type="submit" class="btn btn-primary-action w-100">Generar Reporte</button>
                    </div>
                </div>
            </form>

            <!-- Mostrar mensajes -->
            @if ($mensaje)
                <div class="alert alert-warning text-center" role="alert">
                    <i class="fa-solid fa-exclamation-circle"></i> {{ $mensaje }}
                </div>
            @endif

            <!-- Mostrar tabla con ingresos si hay datos -->
            @if ($datos)
                <div class="table-responsive mt-4">
                    <h3 class="text-center mb-4">Reporte del Mes: <span class="text-primary">{{ $mes }}</span></h3>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Fecha</th>
                                <th scope="col">Ingresos (₡)</th>
                                <th scope="col">Transacciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datos as $registro)
                                <tr>
                                    <td>{{ $registro['fecha'] }}</td>
                                    <td>₡ {{ number_format($registro['ingresos'], 2) }}</td>
                                    <td>{{ $registro['transacciones'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Total:</th>
                                <th>₡ {{ number_format(collect($datos)->sum('ingresos'), 2) }}</th>
                                <th>{{ collect($datos)->sum('transacciones') }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endif
        </div>
    </main>
</x-app-layout>
