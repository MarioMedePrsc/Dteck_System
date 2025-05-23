<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\ArticuloTipoController;
use App\Http\Controllers\CatalogoIvaController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\EquipoMarcaController;
use App\Http\Controllers\EquipoTipoController;
use App\Http\Controllers\ServicioEstatusController;
use App\Http\Controllers\ServicioRealizadoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\VentaDetalleController;
use App\Http\Controllers\VentaEstatusController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/home');
    } else {
        return redirect('/login');
    }
});
//rutas de los resources
Route::resource('clientes',ClienteController::class);
Route::resource('articulos', ArticuloController::class);
Route::resource('articulo-tipos', ArticuloTipoController::class);
Route::resource('catalogo-ivas', CatalogoIvaController::class);
Route::resource('equipos', EquipoController::class);
Route::resource('equipo-marcas', EquipoMarcaController::class);
Route::resource('equipo-tipos', EquipoTipoController::class);
Route::resource('servicio-estatuses', ServicioEstatusController::class);
Route::resource('servicio-realizados', ServicioRealizadoController::class);
Route::resource('ventas', VentaController::class);
Route::resource('venta-detalles', VentaDetalleController::class);
Route::resource('venta-estatuses', VentaEstatusController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
