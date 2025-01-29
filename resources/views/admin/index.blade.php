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
                <a class="text-decoration-none" href="{{ route('admin.producto') }}">{{-- {{ route('ventas.smartTrack.index') }} --}}
                    <div class="card m-2 green-border h-100">
                        <button class="card-body btn">
                            <i class="fa-solid fa-clipboard-list" style="font-size: 40px"></i>
                            <h5>Productos</h5>
                        </button>
                    </div>
                </a>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a class="text-decoration-none" href="{{ route('admin.mensajes') }}">{{-- {{ route('ventas.smartTrack.index') }} --}}
                    <div class="card m-2 green-border h-100">
                        <button class="card-body btn">
                            <i class="fa-regular fa-comment" style="font-size: 40px"></i>
                            <h5>Mensajes</h5>
                        </button>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a class="text-decoration-none" href="{{ route('admin.descuentos') }}">{{-- {{ route('ventas.smartTrack.index') }} --}}
                    <div class="card m-2 green-border h-100">
                        <button class="card-body btn">
                            <i class="fa-solid fa-percent" style="font-size: 40px"></i>
                            <h5>Descuentos</h5>
                        </button>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a class="text-decoration-none" href="{{ route('reportes.index') }}">{{-- {{ route('ventas.smartTrack.index') }} --}}
                    <div class="card m-2 green-border h-100">
                        <button class="card-body btn">
                            <i class="fa-solid fa-list" style="font-size: 40px"></i>
                            <h5>Reportes</h5>
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
