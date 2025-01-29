<x-app-layout>
    <x-slot name="title">Crear Cuenta</x-slot>
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
            <h2 class="text-center mb-4">Crear Cuenta</h2>
            
            <!-- Formulario de Registro -->
            <form action="{{ route('usuario.registro') }}" method="POST"> 
                @csrf
                <!-- Campo para Nombre Completo -->
                <div class="mb-3">
                    <label for="fullName" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="fullName" name="Nombre" placeholder="Ej. Juan" required>
                </div>

                <!-- Campo para Nombre Completo -->
                <div class="mb-3">
                    <label for="fullName" class="form-label">Primer apellido</label>
                    <input type="text" class="form-control" id="Primer_Apellido" name="Primer_Apellido" placeholder="Ej. Pérez" required>
                </div>
    
                <!-- Campo para Nombre Completo -->
                <div class="mb-3">
                    <label for="fullName" class="form-label">Primer apellido</label>
                    <input type="text" class="form-control" id="Segundo_Apellido" name="Segundo_Apellido" placeholder="Ej. Gomez" required>
                </div>

                <!-- Campo para Número de Cédula -->
                <div class="mb-3">
                    <label for="cedula" class="form-label">Número de Cédula</label>
                    <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Ej. 123456789" required>
                </div>
    
                <!-- Campo para Correo Electrónico -->
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@correo.com" required>
                </div>
    
                <!-- Campo para Contraseña -->
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
                </div>
    
                <!-- Campo para Confirmar Contraseña -->
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="********" required>
                </div>
    
                <!-- Aceptación de Términos y Condiciones -->
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="terms" required>
                    <label class="form-check-label" for="terms">Acepto los <a href="#">términos y condiciones</a></label>
                </div>
    
                <!-- Botón de Registrar -->
                <div class="text-center mb-3">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
    
                <!-- Enlace para volver a la página de inicio de sesión -->
                <div class="mt-3 text-center">
                    <p>¿Ya tienes una cuenta? <a href="{{ route('usuario.login') }}" class="text-decoration-none">Iniciar sesión</a></p>
                </div>
            </form>
        </div>
    </main>
    

</x-app-layout>
