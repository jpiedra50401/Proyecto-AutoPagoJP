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
            <div id="carouselExampleInterval" class="carousel slide border" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <img src="{{ asset('img/anuncio1.png') }}" class="d-block w-100" height="400px" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="{{ asset('img/anuncio2.png') }}" class="d-block w-100" height="400px" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="{{ asset('img/anuncio3.png') }}" class="d-block w-100" height="400px" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="{{ asset('img/anuncio4.png') }}" class="d-block w-100" height="400px" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <a class="col-6 text-decoration-none" href="{{ route('usuario.escaneo') }}">{{-- {{ route('usuario.escaneo') }} --}}
                    <div class="card m-2 bg-primary-subtle">
                        <button class="card-body btn">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <h5>Iniciar Escaneo</h5>
                        </button>
                    </div>
                </a>
            </div>

        </div>
    </main>

</x-app-layout>
