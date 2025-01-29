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


        {{-- Aqui va el codigo de la pagina que queremos --}}

        
    </main>

</x-app-layout>
