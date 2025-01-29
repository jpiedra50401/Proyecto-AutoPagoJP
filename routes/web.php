<?php

use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\DescuentosController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\MensajesController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\Reportes\ReporteInventarioController;
use App\Http\Controllers\Reportes\ReportesController;
use App\Http\Controllers\Reportes\ReporteVentasController;
use App\Http\Controllers\Usuario\BuscaproductosController;
use App\Http\Controllers\Usuario\EscaneoController;
use App\Http\Controllers\Usuario\LoginUFController;
use App\Http\Controllers\Usuario\SugerenciasController;
use App\Http\Controllers\Usuario\TiqueteController;
use App\Http\Controllers\Reportes\ReporteProductosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Reportes\ReporteIngresosController;
use App\Http\Controllers\Reportes\ReporteInventariosController;

// ---------------------Usuario
Route::get('/', [homeController::class, 'index'])->name('/');
Route::get('escaneo', [EscaneoController::class, 'escaneo'])->name('usuario.escaneo');
Route::get('buscaproductos', [BuscaproductosController::class, 'buscaproductos'])->name('usuario.buscaproductos');
Route::get('sugerencias', [SugerenciasController::class, 'sugerencias'])->name('usuario.sugerencias');
Route::get('tiquete', [TiqueteController::class, 'tiquete'])->name('usuario.tiquete');
Route::get('login', [LoginUFController::class, 'login'])->name('usuario.login');
Route::get('registro', [LoginUFController::class, 'registro'])->name('usuario.registro');
Route::post('registro', [LoginUFController::class, 'registrar'])->name('usuario.registro');
Route::get('micuenta', [LoginUFController::class, 'micuenta'])->name('usuario.micuenta');
Route::get('editarmicuenta/{id}', [LoginUFController::class, 'editarmicuenta'])->name('usuario.editarmicuenta');
Route::get('reset', [LoginUFController::class, 'reset'])->name('usuario.reset');

// ---------------------Admin
Route::get('admin/index', [HomeAdminController::class, 'index'])->name('admin.index');

// Rutas de productos
Route::get('admin/producto', [ProductoController::class, 'producto'])->name('admin.producto');
Route::get('admin/crearproducto', [ProductoController::class, 'crearproducto'])->name('admin.crearproducto');
Route::post('admin/crearproducto', [ProductoController::class, 'crearproducto'])->name('admin.crearproducto');
Route::delete('admin/eliminarproducto/{Id_Producto}', [ProductoController::class, 'eliminarproducto'])->name('admin.eliminarproducto');
Route::match(['get', 'post'], 'admin/editarproducto/{Id_Producto}', [ProductoController::class, 'editarproducto'])->name('admin.editarproducto');

// Rutas de mensajes
Route::get('admin/mensajes', [MensajesController::class, 'mensajes'])->name('admin.mensajes');
Route::get('admin/crearmensajes', [MensajesController::class, 'crearmensajes'])->name('admin.crearmensajes');
Route::get('admin/editarmensaje/{id}', [MensajesController::class, 'editarmensaje'])->name('admin.editarmensaje');
Route::post('admin/guardarmensaje', [MensajesController::class, 'guardarMensaje'])->name('admin.guardarMensaje');
Route::put('admin/actualizarmensaje/{id}', [MensajesController::class, 'actualizarMensaje'])->name('admin.actualizarMensaje');
Route::delete('admin/eliminarMensaje/{id}', [MensajesController::class, 'eliminarMensaje'])->name('admin.eliminarMensaje');

// Rutas de descuentos
Route::get('admin/descuentos', [DescuentosController::class, 'descuentos'])->name('admin.descuentos');
Route::get('admin/creardescuentos', [DescuentosController::class, 'creardescuentos'])->name('admin.creardescuentos');
Route::get('admin/editardescuentos/{id}', [DescuentosController::class, 'editardescuentos'])->name('admin.editardescuentos');

// ---------------------Reportes
Route::get('reportes/index', [ReportesController::class, 'index'])->name('reportes.index');
Route::get('/reportes/ventas', [ReporteVentasController::class, 'generarReporte'])->name('reportes.ventas');
Route::get('/reportes/productos', [ReporteProductosController::class, 'generarReporte'])->name('reportes.productos');
Route::get('/reportes/ingresos', [ReporteIngresosController::class, 'generarReporte'])->name('reportes.ingresos');
Route::get('reportes/inventarios', [ReporteInventariosController::class, 'generarReporte'])->name('reportes.inventarios');
Route::get('reportes/promociones', [App\Http\Controllers\Reportes\ReportePromocionesController::class, 'generarReporte'])->name('reportes.promociones');
Route::get('reportes/horarios', [App\Http\Controllers\Reportes\ReporteHorariosController::class, 'generarReporte'])->name('reportes.horarios');
Route::get('reportes/clientes', [App\Http\Controllers\Reportes\ReporteClientesController::class, 'generarReporte'])->name('reportes.clientes');
Route::get('reportes/categorias', [App\Http\Controllers\Reportes\ReporteCategoriasController::class, 'generarReporte'])->name('reportes.categorias');

// Ruta de dashboard
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
