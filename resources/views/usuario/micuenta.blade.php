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
            <h2 class="text-center mb-4">Datos del Usuario</h2>
    
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Bienvenido, <strong id="userFullName">Juan Pérez</strong></h5>
                    
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" id="fullName" value="Juan Pérez" disabled>
                    </div>
    
                    <div class="mb-3">
                        <label for="cedula" class="form-label">Número de Cédula</label>
                        <input type="text" class="form-control" id="cedula" value="123456789" disabled>
                    </div>
    
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" value="juan.perez@correo.com" disabled>
                    </div>
    
                    <div class="mb-3">
                        <label for="points" class="form-label">Puntos Obtenidos</label>
                        <input type="text" class="form-control" id="points" value="120" disabled>
                    </div>
    
                    <div class="mb-3">
                        <label for="registrationDate" class="form-label">Fecha de Registro</label>
                        <input type="text" class="form-control" id="registrationDate" value="2024-11-26" disabled>
                    </div>
    
                    <div class="text-center">
                        <a class="btn btn-warning" href="{{ route('usuario.editarmicuenta', 1) }}">Editar Datos</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    

</x-app-layout>
