<x-app-layout>
    <x-slot name="title">Lista de Descuentos</x-slot>
    @push('linksPropios')
        @vite(['resources/css/prueba.css'])
    @endpush
    @push('scriptsPropios')
        @vite(['resources/js/prueba.js'])
    @endpush
    <x-slot name="nav"><x-layouts.navMain /></x-slot>
    <main>
        <div class="container my-4">
            <h2 class="text-center mb-4">Lista de Descuentos</h2>
        
            <!-- Barra de búsqueda y botón de agregar -->
            <div class="d-flex justify-content-between mb-3">
                <!-- Cuadro de búsqueda alineado a la izquierda -->
                <div class="input-group" style="max-width: 300px;">
                    <input type="text" class="form-control" placeholder="Buscar descuento" aria-label="Buscar descuento">
                    <button class="btn btn-primary" type="button">Buscar</button>
                </div>
        
                <!-- Botón de agregar alineado a la derecha -->
                <a class="btn btn-primary" href="{{ route('admin.creardescuentos') }}">Agregar Nuevo Descuento</a>
            </div>
        
            <!-- Tabla de Descuentos -->
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nombre del Descuento</th>
                        <th>Porcentaje de Descuento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Descuento Verano</td>
                        <td>20%</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('admin.editardescuentos', 1) }}">Editar</a>
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Descuento Black Friday</td>
                        <td>50%</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('admin.editardescuentos', 2) }}">Editar</a>
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Descuento Navidad</td>
                        <td>30%</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('admin.editardescuentos', 3) }}">Editar</a>
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Descuento Primavera</td>
                        <td>15%</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('admin.editardescuentos', 4) }}">Editar</a>
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Descuento Año Nuevo</td>
                        <td>25%</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('admin.editardescuentos', 5) }}">Editar</a>
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Descuento Día de la Madre</td>
                        <td>10%</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('admin.editardescuentos', 6) }}">Editar</a>
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Descuento Día del Padre</td>
                        <td>15%</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('admin.editardescuentos', 7) }}">Editar</a>
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Descuento Cyber Monday</td>
                        <td>40%</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('admin.editardescuentos', 8) }}">Editar</a>
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Descuento Back to School</td>
                        <td>35%</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('admin.editardescuentos', 9) }}">Editar</a>
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Descuento Fin de Temporada</td>
                        <td>50%</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('admin.editardescuentos', 10) }}">Editar</a>
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        

        
    </main>

</x-app-layout>
