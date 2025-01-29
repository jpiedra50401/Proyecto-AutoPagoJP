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
            <h2 class="text-center mb-4">Enviar Sugerencia</h2>

            <form>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" type="checkbox" id="anonymousSwitch">
                    <label class="form-check-label" for="anonymousSwitch">Enviar de manera anónima</label>
                </div>

                <div class="mb-3" id="nameField">
                    <label for="clientName" class="form-label">Nombre del Cliente</label>
                    <input type="text" class="form-control" id="clientName" name="clientName"
                        placeholder="Ej. Juan Pérez" required>
                </div>

                <div class="mb-3" id="emailField">
                    <label for="clientEmail" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="clientEmail" name="clientEmail"
                        placeholder="ejemplo@correo.com" required>
                </div>

                <div class="mb-3">
                    <label for="suggestion" class="form-label">Sugerencia</label>
                    <textarea class="form-control" id="suggestion" name="suggestion" rows="4"
                        placeholder="Escribe tu sugerencia o comentario aquí..." required></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Enviar Sugerencia</button>
                </div>
            </form>
        </div>
    </main>

    <script>
        const anonymousSwitch = document.getElementById('anonymousSwitch');
        const nameField = document.getElementById('nameField');
        const emailField = document.getElementById('emailField');

        anonymousSwitch.addEventListener('change', function() {
            if (this.checked) {
                nameField.style.display = 'none';
                emailField.style.display = 'none';
            } else {
                nameField.style.display = 'block';
                emailField.style.display = 'block';
            }
        });
    </script>


</x-app-layout>
