<x-app-layout>
    <x-slot name="title">Crear Descuento</x-slot>
    @push('linksPropios')
        @vite(['resources/css/prueba.css'])
    @endpush
    @push('scriptsPropios')
        @vite(['resources/js/prueba.js'])
    @endpush
    <x-slot name="nav"><x-layouts.navMain /></x-slot>
    <main>
        <div class="container col-8 my-4">
            <h2 class="text-center mb-4">Crear Descuento</h2>
            <form>
                <div class="mb-3">
                    <label for="discountName" class="form-label">Nombre del Descuento</label>
                    <input type="text" class="form-control" id="discountName" name="discountName" placeholder="Ej. Descuento Verano" required>
                </div>
        
                <div class="mb-3">
                    <label for="discountPercentage" class="form-label">Porcentaje de Descuento</label>
                    <input type="number" class="form-control" id="discountPercentage" name="discountPercentage" placeholder="Ej. 15" min="0" max="100" required>
                </div>
        
                <div class="mb-3">
                    <label for="discountProduct" class="form-label">Artículo al que Aplica el Descuento</label>
                    <select class="form-select" id="discountProduct" name="discountProduct" required>
                        <option value="" selected disabled>Seleccione el artículo</option>
                        <option value="manzanas">Manzanas</option>
                        <option value="leche">Leche</option>
                        <option value="carnePollo">Carne de Pollo</option>
                        <option value="tomates">Tomates</option>
                        <option value="cocaCola">Coca-Cola</option>
                    </select>
                </div>
        
                <div class="mb-3">
                    <label for="discountExpiration" class="form-label">Vencimiento del Descuento</label>
                    <input type="date" class="form-control" id="discountExpiration" name="discountExpiration" required>
                </div>
        
                <div class="mb-3">
                    <label for="discountDescription" class="form-label">Descripción del Descuento</label>
                    <textarea class="form-control" id="discountDescription" name="discountDescription" rows="3" placeholder="Descripción breve del descuento (opcional)"></textarea>
                </div>
        
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Guardar Descuento</button>
                </div>
            </form>
        </div>
        
        
    </main>

</x-app-layout>
