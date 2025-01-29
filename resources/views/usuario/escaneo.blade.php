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
        <div class="container my-4">
            <header class="text-center mb-4">
                <h1 class="fw-bold">Minisúper del Valle</h1>
                <p class="lead">¡Simplifica tus compras con nuestro sistema de escaneo automático!</p>
            </header>

            <div class="alert alert-success text-center" role="alert">
                Inicia sesión con tu código para acumular puntos <a href="#">aquí</a>
            </div>

            <section class="mb-4">
                <h2 class="mb-3">Agrega tus Productos</h2>
                <div class="row g-3">
                    <div class="col-4">
                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control" placeholder="Por Escaner">
                            <span class="input-group-text" id="buscarxCodigo"><i
                                    class="fa-solid fa-magnifying-glass"></i></span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control" placeholder="Por Nombre">
                            <span class="input-group-text" data-bs-toggle="modal" data-bs-target="#modalBusqueda"
                                id="buscarxNombre"><i class="fa-solid fa-magnifying-glass"></i></span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group input-group-lg">
                            <button class="card-body btn bg-primary-subtle border" data-bs-toggle="modal"
                                data-bs-target="#modalTiquete"><i class="fa-solid fa-cart-shopping"></i> Ver
                                Tiquete</button>

                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="mb-3">Carrito de Compras</h2>
                    <h4 class="mb-3">Tiene 120 puntos <a href="#">Aplicar a la compra</a></h4>
                    <h3>Total: <span id="total-amount">₡ 16,261</span></h3>
                </div>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Producto</th>
                            <th scope="col">Precio Unitario</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Subtotal</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="cart-table-body">
                        <tr>
                            <td>Arrocitico 1.8 Kg</td>
                            <td>₡ 1,800</td>
                            <td>2</td>
                            <td>₡ 3,600</td>
                            <td>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Frijoles San Pedro 1.3 Kg</td>
                            <td>₡ 1,640</td>
                            <td>1</td>
                            <td>₡ 1,640</td>
                            <td>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Azucar Santa Maria 1.8 Kg</td>
                            <td>₡ 2,350</td>
                            <td>3</td>
                            <td>₡ 7,050</td>
                            <td>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Aguacate Hass</td>
                            <td>₡ 4,800</td>
                            <td>0.620</td>
                            <td>₡ 2,976</td>
                            <td>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Cloro Tia Blankita 1L</td>
                            <td>₡ 995</td>
                            <td>1</td>
                            <td>₡ 995</td>
                            <td>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>


            </section>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalTiquete" tabindex="-1" aria-labelledby="modalTiqueteLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalTiqueteLabel">Tiquete de compra</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Unidad</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody id="cart-table-body">
                                <tr class="m-0">
                                    <td class="p-0">Arrocitico 1.8 Kg</td>
                                    <td class="p-0">₡ 1,800</td>
                                    <td class="p-0">2</td>
                                    <td class="p-0">₡ 3,600</td>
                                </tr>
                                <tr class="m-0">
                                    <td class="p-0">Frijoles San Pedro 1.3 Kg</td>
                                    <td class="p-0">₡ 1,640</td>
                                    <td class="p-0">1</td>
                                    <td class="p-0">₡ 1,640</td>
                                </tr>
                                <tr class="m-0">
                                    <td class="p-0">Azucar Santa Maria 1.8 Kg</td>
                                    <td class="p-0">₡ 2,350</td>
                                    <td class="p-0">3</td>
                                    <td class="p-0">₡ 7,050</td>
                                </tr>
                                <tr class="m-0">
                                    <td class="p-0">Aguacate Hass</td>
                                    <td class="p-0">₡ 4,800</td>
                                    <td class="p-0">0.620</td>
                                    <td class="p-0">₡ 2,976</td>
                                </tr>
                                <tr>
                                    <td class="p-0">Cloro Tia Blankita 1L</td>
                                    <td class="p-0">₡ 995</td>
                                    <td class="p-0">1</td>
                                    <td class="p-0">₡ 995</td>
                                </tr>
                            </tbody>
                        </table>
                        <h5 class="text-end">SubTotal sin puntos: <span id="total-amount">₡ 16,261</span></h5>
                        <h5 class="text-end">Puntos a Aplicar <span id="total-amount">120</span></h5>
                    </div>
                    <div class="modal-footer">
                        <h3>Total: <span id="total-amount">₡ 16,141</span></h3>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>
                        <button type="button" class="btn btn-primary">Finalizar compra</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="modalBusqueda" tabindex="-1" aria-labelledby="modalBusquedaLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalBusquedaLabel">Busqueda de producto</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Lista de productos con nombre según busqueda
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

    </main>

</x-app-layout>
