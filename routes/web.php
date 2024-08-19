<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\RegistrosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mostrar', function () {
    return view('Principal');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});

/**inventarios y crud de los carros */
Route::get('/inventario', function () {
    return view('inventario');
});
Route::get('/inventario/mostrar/todos', [InventariosController::class, 'mostrarautos'])->name('mostrar.autos');

Route::post('/inventario/buscar/modelomarca', [InventariosController::class, 'modelomarca'])->name('buscar.modelomarca');



Route::get('/registros', function () {
    return view('registros');
});

Route::post('/registros/buscar/fechas', [RegistrosController::class, 'buscarporfechas'])->name('buscar.registros');




Route::get('/agregarauto', function () {
    return view('agregarauto');
});

/*rutas de usuarios API CRUD */
Route::get('/usuarios/mostrar', [UsuarioController::class, 'mostrarUsuarios'])->name('mostrar.usuarios');
Route::post('/cliente/buscar', [UsuarioController::class, 'buscarporid'])->name('buscar.usuarios');

Route::get('/usuarios/mostrar/{id}', [UsuarioController::class, 'mostrarporid']);

Route::get('/agregarusuario', function () {
    return view('agregarusuario');
});

Route::post('/usuarios/mostrar', [UsuarioController::class, 'crearUsuario'])->name('guardar.usuario');



Route::get('/inventario/mostrar', function () {
    return view('infoauto');
});


Route::get('/registros/mostrar', function () {
    return view('factura');
});