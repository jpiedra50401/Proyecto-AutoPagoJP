<x-app-layout>
    <x-slot name="title">Datos del Usuario</x-slot>
    @push('linksPropios')
        @vite(['resources/css/prueba.css'])
        @vite(['resources/css/usuario.css'])
    @endpush
    @push('scriptsPropios')
        @vite(['resources/js/prueba.js'])
    @endpush
    <x-slot name="nav"><x-layouts.navMain /></x-slot>
    
    <main>
        <div class="container col-6 my-4">
            <h2 class="text-center mb-4">Editar Datos del Usuario</h2>
    
            <form>
                <div class="mb-3">
                    <label for="fullName" class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control" id="fullName" name="fullName" value="Juan Pérez" required>
                </div>
    
                <div class="mb-3">
                    <label for="cedula" class="form-label">Número de Cédula</label>
                    <input type="text" class="form-control" id="cedula" name="cedula" value="123456789" required>
                </div>
    
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" value="juan.perez@correo.com" required>
                </div>
    
                <div class="mb-3">
                    <label for="password" class="form-label">Nueva Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="********">
                </div>
    
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirmar Nueva Contraseña</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="********">
                </div>
    
                <div class="text-center mb-3">
                    <a class="btn btn-success" href="{{ route('usuario.micuenta') }}">Guardar Cambios</a>
                </div>
            </form>
        </div>
    </main>
    
    

</x-app-layout>
