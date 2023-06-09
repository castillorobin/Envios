<?php

use Illuminate\Support\Facades\Route;
//agregue controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RecolectaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\RepartidorController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\FacturacionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/facturasfiltro/{comercio}', [App\Http\Controllers\FacturacionController::class, 'filtro'])->name('facturasfiltro');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('recolecta', RecolectaController::class);
    Route::resource('pedidos', PedidoController::class);
    Route::resource('repartidores', RepartidorController::class);
    Route::resource('vendedores', VendedorController::class);
    Route::resource('facturas', FacturacionController::class);
    
});

Route::get('pedido/desdeenvio', [App\Http\Controllers\PedidoController::class, 'desdeenvio'] )->name('desdeenvio') ;

Route::get('comercio/guardar', [App\Http\Controllers\VendedorController::class, 'guardar'] )->name('guardar') ;

Route::get('factura/facturapdf/{pedidos}', [App\Http\Controllers\FacturacionController::class, 'facturapdf'] )->name('pedido.facturapdf') ;

Route::get('pedidos/etiqueta/{id}', [App\Http\Controllers\PedidoController::class, 'etiqueta'] )->name('pedido.etiqueta') ; 