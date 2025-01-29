<x-app-layout>
    <x-slot name="title">Iniciar Sesión</x-slot>
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
            <h2 class="text-center mb-4">Iniciar Sesión</h2>

            <form>
                <div class="mb-3">
                    <label for="cedula" class="form-label">Número de Cédula</label>
                    <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Ej. 123456789"
                        required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="********"
                        required>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Recordarme</label>
                </div>

                <div class="d-flex justify-content-center mb-3">
                    <a href="{{ route('usuario.registro') }}" class="btn btn-secondary me-2">Registrarse</a>
                    <a href="{{ route('usuario.micuenta') }}" class="btn btn-primary">Iniciar Sesión</a>

                    {{-- <button type="submit" class="btn btn-primary">Iniciar Sesión</button> --}}

                </div>

                <div class="mt-3 text-center">
                    <a href="{{ route('usuario.reset') }}" class="text-decoration-none">¿Olvidaste tu contraseña?</a>
                </div>
            </form>
        </div>
    </main>

</x-app-layout>
