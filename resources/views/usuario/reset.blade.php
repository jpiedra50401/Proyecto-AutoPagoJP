<x-app-layout>
    <x-slot name="title">Caja AutoPago</x-slot>
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
            <h2 class="text-center mb-4">Resetear Contraseña</h2>
    
            <!-- Formulario para Resetear Contraseña -->
            <form>
                <!-- Campo para Correo Electrónico -->
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@correo.com" required>
                    <div class="form-text">Te enviaremos una nueva contraseña.</div>
                </div>
    
                <div class="text-center mb-3">
                    <button type="submit" class="btn btn-primary">Enviar Contraseña</button>
                </div>
            </form>
        </div>
    </main>
    

</x-app-layout>
