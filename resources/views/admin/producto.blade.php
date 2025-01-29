<x-app-layout>
    <x-slot name="title">Lista de Artículos</x-slot>
    @push('linksPropios')
        @vite(['resources/css/prueba.css'])
    @endpush
    @push('scriptsPropios')
        @vite(['resources/js/prueba.js'])
    @endpush
    <x-slot name="nav"><x-layouts.navMain /></x-slot>
    <main>

        <div class="container my-4">
        @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <h2 class="text-center mb-4">Lista de Productos</h2>
            <div class="d-flex justify-content-between mb-3">
                <div class="input-group" style="max-width: 300px;">
                    <input type="text" class="form-control" placeholder="Buscar Producto" aria-label="Buscar Producto">
                    <button class="btn btn-primary" type="button">Buscar</button>
                </div>
            
                <a class="btn btn-primary" href="{{ route('admin.crearproducto') }}">Agregar Nuevo Producto</a>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nombre del Producto</th>
                        <th>Marca</th>
                        <th>Stock</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Fecha De Creacion</th>
                        <th>Fecha De Modificacion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
    <tbody>
        @foreach ($producto as $producto)
            <tr>
            <td>{{ $producto->Nombre_Producto }}</td>
            <td>{{ $producto->Marca }}</td>
            <td>{{ $producto->Stock ?? 'N/A' }}</td>
            <td>{{ $producto->Descripcion }}</td>
            <td>{{ number_format($producto->Precio, 2) }} ₡</td>
            <td>
                {{ $producto->created_at ? \Carbon\Carbon::parse($producto->created_at)->format('d/m/Y H:i') : 'N/A' }}
            </td>
            <td>
                {{ $producto->updated_at ? \Carbon\Carbon::parse($producto->updated_at)->format('d/m/Y H:i') : 'N/A' }}
            </td>
            <td>
                <a href="{{ route('admin.editarproducto', $producto->Id_Producto) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('admin.eliminarproducto', $producto->Id_Producto) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                     <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este producto?')">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>

            </table>
        </div>

    </main>

</x-app-layout>
