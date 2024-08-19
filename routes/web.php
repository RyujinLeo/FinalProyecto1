<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\RegistrosController;
use App\Http\Controllers\RentasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mostrar', function () {
    return view('Principal');
});
Route::get('/RENTAS/mostrar/todos', [InventarioController::class, 'mostrarCarros'])->name('mostrar.autosrenta');


Route::get('/usuarios', function () {
    return view('usuarios');
});

/**inventarios y crud de los carros */
Route::get('/inventario', [InventarioController::class, 'mostrarCarros']);
Route::get('/inventario/mostrar/todos', [InventarioController::class, 'mostrarCarros'])->name('mostrar.autos');

Route::post('/inventario/buscar/modelomarca', [InventarioController::class, 'modelomarca'])->name('buscar.modelomarca');

Route::get('/agregarauto', function () {
    return view('agregarauto');
});

//Crea un Auto en la base de datos
Route::post('/agregarauto/guardar', [InventarioController::class, 'crearAuto'])->name('guardar.auto');


/**registros crud */
Route::get('/registros', [RegistrosController::class, 'mostrarRegistros']);

//mas informacion registros
Route::get('/registros/mostrar/alquiler/{idAlquiler}/{idCliente}/{idVehiculo}', [RegistrosController::class, 'inforegistro']);

Route::post('/registros/buscar/fechas', [RegistrosController::class, 'buscarporfechas'])->name('buscar.registros');




/*rutas de usuarios API CRUD */
Route::get('/usuarios/mostrar', [UsuarioController::class, 'mostrarUsuarios'])->name('mostrar.usuarios');
Route::post('/cliente/buscar', [UsuarioController::class, 'buscarporid'])->name('buscar.usuarios');

//Mas Informacion de un cliente
Route::get('/usuarios/mostrar/{id}', [UsuarioController::class, 'mostrarporid'])->name('info.usuario');

Route::get('/agregarusuario', function () {
    return view('agregarusuario');
});

Route::post('/usuarios/mostrar', [UsuarioController::class, 'crearUsuario'])->name('guardar.usuario');


//Mas Informacion sobre un Auto
Route::get('/inventario/mostrar/{vin}', [InventarioController::class, 'buscarautoid'] )->name('info.auto');


Route::get('/registros/mostrar', function () {
    return view('factura');
});