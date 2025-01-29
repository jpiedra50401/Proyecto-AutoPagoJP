<x-app-layout>
    <x-slot name="title">Crear Mensaje</x-slot>
    @push('linksPropios')
        @vite(['resources/css/prueba.css'])
    @endpush
    @push('scriptsPropios')
        @vite(['resources/js/prueba.js'])
    @endpush
    <x-slot name="nav"><x-layouts.navMain /></x-slot>
    <main>
        <div class="container col-6 my-4">
            <h2 class="text-center mb-4">Crear Mensaje</h2>

            <!-- Mostrar errores de validación -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.guardarMensaje') }}" method="POST">
                @csrf <!-- Token de seguridad para Laravel -->
                <div class="mb-3">
                    <label for="tipo" class="form-label">Tipo de Mensaje</label>
                    <select class="form-select" id="tipo" name="tipo" required>
                        <option value="" selected disabled>Seleccione el tipo de mensaje</option>
                        <option value="anuncio">Anuncio</option>
                        <option value="descuento">Descuento</option>
                        <option value="horario">Horario</option>
                        <option value="oferta">Oferta Especial</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="estado" class="form-label">Estado</label>
                    <select class="form-select" id="estado" name="estado" required>
                        <option value="" selected disabled>Seleccione el estado</option>
                        <option value="activo">Activo</option>
                        <option value="inactivo">Inactivo</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="mensaje" class="form-label">Descripción del Mensaje</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="3" placeholder="Breve descripción del mensaje" required></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Guardar Mensaje</button>
                    <a href="{{ route('admin.mensajes') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </main>
</x-app-layout>
