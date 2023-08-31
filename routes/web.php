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
use App\Http\Controllers\EstatusController;

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
    Route::resource('estatus', EstatusController::class);
    
}); 

Route::get('pedido/desdeenvio', [App\Http\Controllers\PedidoController::class, 'desdeenvio'] )->name('desdeenvio') ;
Route::get('pedido/editando/{id}', [App\Http\Controllers\PedidoController::class, 'editando'] )->name('editando') ;
Route::get('pedido/editarlo/{id}', [App\Http\Controllers\PedidoController::class, 'editarlo'] )->name('editarlo') ;

Route::get('comercio/guardar', [App\Http\Controllers\VendedorController::class, 'guardar'] )->name('guardar') ;

Route::get('factura/facturapdf/{pedidos}', [App\Http\Controllers\FacturacionController::class, 'facturapdf'] )->name('pedido.facturapdf') ;

Route::get('pedidos/etiqueta/{id}', [App\Http\Controllers\PedidoController::class, 'etiqueta'] )->name('pedido.etiqueta') ; 
Route::get('pedidos/imprimire', [App\Http\Controllers\PedidoController::class, 'imprimire'] )->name('imprimire'); 

Route::get('pedido/estado', [App\Http\Controllers\PedidoController::class, 'estado'] )->name('estado') ;
Route::get('pedido/cestado', [App\Http\Controllers\PedidoController::class, 'cestado'] )->name('cestado') ;

Route::get('pedido/listaestatus', [App\Http\Controllers\EstatusController::class, 'listaestatus'] )->name('listaestatus') ;
Route::get('pedido/cambiando', [App\Http\Controllers\EstatusController::class, 'cambiando'] )->name('cambiando') ;

Route::get('pedido/verpedido/{id}', [App\Http\Controllers\PedidoController::class, 'verpedido'] )->name('verpedido') ;

Route::get('reportes', [App\Http\Controllers\PedidoController::class, 'reporte'] )->name('reporte') ;
Route::get('reportes/envio', [App\Http\Controllers\PedidoController::class, 'reporteenvio'] )->name('reporteenvio') ;
Route::get('reportes/ganancia', [App\Http\Controllers\PedidoController::class, 'reporteganancia'] )->name('reporteganancia') ;
Route::get('reportes/cobros', [App\Http\Controllers\PedidoController::class, 'reportecobros'] )->name('reportecobros') ;
Route::get('reportes/enviofiltro', [App\Http\Controllers\PedidoController::class, 'reporteenviof'] )->name('reporteenviof') ;
Route::get('reportes/gananfiltro', [App\Http\Controllers\PedidoController::class, 'reportegananciaff'] )->name('reportegananciaff') ;
Route::get('reportes/cobrofiltro', [App\Http\Controllers\PedidoController::class, 'reportecobrof'] )->name('reportecobrof') ;

Route::get('descargar-respaldo', [App\Http\Controllers\PedidoController::class, 'descargarRespaldo'] )->name('descargarRespaldo') ; 

Route::get('repofiltro', [App\Http\Controllers\PedidoController::class, 'repofiltro'] )->name('repofiltro') ;

Route::get('printfiltro/{filtro}/{ftipo}', [App\Http\Controllers\PedidoController::class, 'printfiltro'] )->name('printfiltro') ;

Route::get('pedido/editrepa', [App\Http\Controllers\PedidoController::class, 'editrepa'] )->name('editrepa') ;

Route::get('pedido/camara', [App\Http\Controllers\PedidoController::class, 'camara'] )->name('camara') ;

Route::get('estatus/agregar', [App\Http\Controllers\EstatusController::class, 'agregar'] )->name('agregar') ;