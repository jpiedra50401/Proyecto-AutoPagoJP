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
<div class="container">
    <div class="container-md pt-4 ">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
    
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a class="text-decoration-none" href="{{ route('reportes.ventas') }}">{{-- {{ route('ventas.smartTrack.index') }} --}}
                    <div class="card m-2 green-border h-100">
                        <button class="card-body btn">
                            <i class="fa-solid fa-money-bill" style="font-size: 40px"></i>
                            <h5>Ventas</h5>
                        </button>
                    </div>
                </a>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a class="text-decoration-none" href="{{ route('reportes.inventario') }}">{{-- {{ route('ventas.smartTrack.index') }} --}}
                    <div class="card m-2 green-border h-100">
                        <button class="card-body btn">
                            <i class="fa-solid fa-scale-unbalanced" style="font-size: 40px"></i>
                            <h5>Inventario</h5>
                        </button>
                    </div>
                </a>
            </div>
            
        </div>
    </div>

</div>
        {{-- Aqui va el codigo de la pagina que queremos --}}

        
    </main>

</x-app-layout>
