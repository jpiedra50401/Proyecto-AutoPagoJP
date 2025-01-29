<x-app-layout>
    <x-slot name="title">Caja AutoPago</x-slot>
    @push('linksPropios')
        @vite(['resources/css/prueba.css'])
    @endpush
    @push('scriptsPropios')
        @vite(['resources/js/prueba.js'])
    @endpush
    <x-slot name="nav"><x-layouts.navMain /></x-slot>
    <main>
        <div class="container my-4">
            <h2 class="text-center mb-4">Lista de Mensajes</h2>
        
            <div class="d-flex justify-content-between mb-3">
                <!-- Formulario de búsqueda -->
                <form action="{{ route('admin.mensajes') }}" method="GET" class="d-flex" style="max-width: 300px;">
                    <input type="text" class="form-control" name="search" placeholder="Buscar mensaje"
                        value="{{ $search ?? '' }}" aria-label="Buscar mensaje">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </form>
        
                <a class="btn btn-primary" href="{{ route('admin.crearmensajes') }}">Agregar Nuevo Mensaje</a>
            </div>
        
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Estado</th>
                        <th>Mensaje</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($notificaciones as $notificacion)
                        <tr>
                            <td>{{ $notificacion->Tipo }}</td>
                            <td>{{ $notificacion->Estado }}</td>
                            <td>{{ $notificacion->Mensaje }}</td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="{{ route('admin.editarmensaje', ['id' => $notificacion->Id_Notificacion]) }}">Editar</a>
                                <form action="{{ route('admin.eliminarMensaje', ['id' => $notificacion->Id_Notificacion]) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta notificación?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">No se encontraron notificaciones.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>
</x-app-layout>
