<x-app-layout>
    <x-slot name="title">Editar Mensaje</x-slot>
    @push('linksPropios')
        @vite(['resources/css/prueba.css'])
    @endpush
    @push('scriptsPropios')
        @vite(['resources/js/prueba.js'])
    @endpush
    <x-slot name="nav"><x-layouts.navMain /></x-slot>
    <main>
        <div class="container col-6 my-4">
            <h2 class="text-center mb-4">Editar Mensaje</h2>

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

            <form action="{{ route('admin.actualizarMensaje', ['id' => $notificacion->Id_Notificacion]) }}" method="POST">
                @csrf <!-- Token de seguridad -->
                @method('PUT') <!-- Método HTTP PUT para actualización -->

                <div class="mb-3">
                    <label for="tipo" class="form-label">Tipo de Mensaje</label>
                    <select class="form-select" id="tipo" name="tipo" required>
                        <option value="" disabled>Seleccione el tipo de mensaje</option>
                        <option value="anuncio" {{ $notificacion->Tipo == 'anuncio' ? 'selected' : '' }}>Anuncio</option>
                        <option value="descuento" {{ $notificacion->Tipo == 'descuento' ? 'selected' : '' }}>Descuento</option>
                        <option value="horario" {{ $notificacion->Tipo == 'horario' ? 'selected' : '' }}>Horario</option>
                        <option value="oferta" {{ $notificacion->Tipo == 'oferta' ? 'selected' : '' }}>Oferta Especial</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="estado" class="form-label">Estado</label>
                    <select class="form-select" id="estado" name="estado" required>
                        <option value="" disabled>Seleccione el estado</option>
                        <option value="activo" {{ $notificacion->Estado == 'activo' ? 'selected' : '' }}>Activo</option>
                        <option value="inactivo" {{ $notificacion->Estado == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="mensaje" class="form-label">Descripción del Mensaje</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="3" required>{{ $notificacion->Mensaje }}</textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Actualizar Mensaje</button>
                    <a href="{{ route('admin.mensajes') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </main>
</x-app-layout>
