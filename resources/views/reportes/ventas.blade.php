<x-app-layout>
    <x-slot name="title">Reporte de Ventas</x-slot>

    @push('linksPropios')
        @vite(['resources/css/reportes.css'])
    @endpush

    @push('scriptsPropios')
        @vite(['resources/js/reportes.js'])
    @endpush

    <x-slot name="nav">
        <x-layouts.navMain />
    </x-slot>

    <main>
        <div class="container my-5">
            <header class="text-center mb-5">
                <h1 class="fw-bold primary-heading">Reporte Diario de Ventas</h1>
                <p class="lead secondary-text">Consulta y gestiona los datos de ventas realizadas durante el día.</p>
            </header>

            @if ($mensaje)
                <div class="alert alert-warning text-center" role="alert">
                    <i class="fa-solid fa-exclamation-circle"></i> {{ $mensaje }}
                </div>
            @else
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="fw-bold">Total Ventas: <span class="text-primary">₡ {{ number_format(20000, 2) }}</span></h4>
                    <button class="btn btn-primary-action" onclick="window.print()">
                        <i class="fa-solid fa-file-pdf"></i> Exportar PDF
                    </button>
                </div>

                <table class="table table-bordered text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio Unitario</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $venta)
                            <tr>
                                <td>{{ $venta['producto'] }}</td>
                                <td>{{ $venta['cantidad'] }}</td>
                                <td>₡ {{ number_format($venta['total'] / $venta['cantidad'], 2) }}</td>
                                <td>₡ {{ number_format($venta['total'], 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </main>
</x-app-layout>
