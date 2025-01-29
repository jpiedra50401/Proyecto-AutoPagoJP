<x-app-layout>
    <x-slot name="title">Crear Producto</x-slot>
    @push('linksPropios')
        @vite(['resources/css/prueba.css'])
    @endpush
    @push('scriptsPropios')
        @vite(['resources/js/prueba.js'])
    @endpush
    <x-slot name="nav"><x-layouts.navMain /></x-slot>
    <main>
        <div class="container col-6 my-4">
            <h2 class="text-center mb-4">Crear Producto</h2>
            <form action="{{ route('admin.crearproducto') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="Nombre_Producto" class="form-label">Nombre del Producto</label>
                    <input type="text" class="form-control" id="Nombre_Producto" name="Nombre_Producto" placeholder="Ej. Arroz Tío Pelón" required>
                </div>
                <div class="mb-3">
                    <label for="Marca" class="form-label">Marca</label>
                    <input type="text" class="form-control" id="Marca" name="Marca" placeholder="Ej. Black & Decker" required>
                </div>
                <div class="mb-3">
                    <label for="Stock" class="form-label">Cantidad en Stock</label>
                    <input type="number" class="form-control" id="Stock" name="Stock" placeholder="Ej. 25" min="0">
                </div>
                <div class="mb-3">
                    <label for="Descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3" placeholder="Descripción del producto" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="Precio" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="Precio" name="Precio" placeholder="Ej. 4500" step="0.01" min="0" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Guardar Producto</button>
                    <a href="{{ route('admin.producto') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </main>
</x-app-layout>
