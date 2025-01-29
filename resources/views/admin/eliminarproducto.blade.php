<x-app-layout>
    <x-slot name="title">Eliminar Producto</x-slot>
    <x-slot name="nav"><x-layouts.navMain /></x-slot>
    <main>
        <div class="container col-6 my-4">
            <h2 class="text-center mb-4">¿Estás seguro de que deseas eliminar este producto?</h2>
            <div class="mb-3">
                <p><strong>Producto:</strong> {{ $producto->Nombre_Producto }}</p>
                <p><strong>Marca:</strong> {{ $producto->Marca }}</p>
                <p><strong>Precio:</strong> {{ $producto->Precio }}</p>
                <p><strong>Stock:</strong> {{ $producto->Stock }}</p>
            </div>
            <form action="{{ route('admin.eliminarproducto', $producto->Id_Producto) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="text-center">
                    <button type="submit" class="btn btn-danger">Eliminar Producto</button>
                    <a href="{{ route('admin.producto') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </main>
</x-app-layout>
