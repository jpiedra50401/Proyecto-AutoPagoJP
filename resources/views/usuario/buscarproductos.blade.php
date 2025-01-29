<x-app-layout>
    <x-slot name="title">Buscar Artículos</x-slot>
    @push('linksPropios')
        @vite(['resources/css/prueba.css'])
    @endpush
    @push('scriptsPropios')
        @vite(['resources/js/prueba.js'])
    @endpush
    <x-slot name="nav"><x-layouts.navMain /></x-slot>
    <main>
        <main>
            <div class="container col-6 my-4">
                <h2 class="text-center mb-4">Buscar Artículos</h2>
        
                <!-- Barra de búsqueda -->
                <div class="mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar artículo" aria-label="Buscar artículo">
                        <button class="btn btn-primary" type="button">Buscar</button>
                    </div>
                </div>
        
                <!-- Tabla de Artículos -->
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nombre del Artículo</th>
                            <th>Ubicación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Manzanas</td>
                            <td>Pasillo 3</td>
                        </tr>
                        <tr>
                            <td>Leche</td>
                            <td>Pasillo 1</td>
                        </tr>
                        <tr>
                            <td>Carne de Pollo</td>
                            <td>Congeladores</td>
                        </tr>
                        <tr>
                            <td>Tomates</td>
                            <td>Pasillo 2</td>
                        </tr>
                        <tr>
                            <td>Coca-Cola</td>
                            <td>Refrigerador 4</td>
                        </tr>
                        <tr>
                            <td>Arroz</td>
                            <td>Pasillo 5</td>
                        </tr>
                        <tr>
                            <td>Harina</td>
                            <td>Pasillo 6</td>
                        </tr>
                        <tr>
                            <td>Jugo de Naranja</td>
                            <td>Pasillo 7</td>
                        </tr>
                        <tr>
                            <td>Galletas</td>
                            <td>Pasillo 8</td>
                        </tr>
                        <tr>
                            <td>Yogur</td>
                            <td>Pasillo 1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
        
    </main>

</x-app-layout>
