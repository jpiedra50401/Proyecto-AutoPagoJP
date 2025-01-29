<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        {{-- Logo de la empresa --}}
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/logo5.png') }}" alt="MiniSúper del Valle" style="height: 40px;">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Opciones existentes -->
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('admin.index') }}">Administración</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('usuario.buscaproductos') }}">Buscar Artículos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('usuario.sugerencias') }}">Sugerencias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('usuario.escaneo') }}">Escanear</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('usuario.login') }}">Ganá Puntos</a>
                </li>

                <!-- Dropdown para Reportes -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="reportesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Reportes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="reportesDropdown">
                        <li><a class="dropdown-item" href="{{ route('reportes.productos') }}">Productos Más Vendidos</a></li>
                        <li><a class="dropdown-item" href="{{ route('reportes.ingresos') }}">Ingresos Mensuales</a></li>
                        <li><a class="dropdown-item" href="{{ route('reportes.inventarios') }}">Inventarios Bajos</a></li>
                        <li><a class="dropdown-item" href="{{ route('reportes.clientes') }}">Clientes Frecuentes</a></li>
                        <li><a class="dropdown-item" href="{{ route('reportes.horarios') }}">Ventas por Horarios</a></li>
                        <li><a class="dropdown-item" href="{{ route('reportes.categorias') }}">Ventas por Categorías</a></li>
                        <li><a class="dropdown-item" href="{{ route('reportes.promociones') }}">Promociones</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <!-- Incluir CSS personalizado -->
    @push('linksPropios')
        @vite(['resources/css/reportes.css'])
    @endpush
</nav>
