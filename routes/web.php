<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mostrar', function () {
    return view('Principal');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});


Route::get('/inventario', function () {
    return view('inventario');
});

Route::get('/registros', function () {
    return view('registros');
});

Route::get('/agregarusuario', function () {
    return view('agregarusuario');
});


Route::get('/agregarauto', function () {
    return view('agregarauto');
});

Route::get('/usuarios/mostrar', function () {
    return view('infousuario');
});

Route::get('/inventario/mostrar', function () {
    return view('infoauto');
});


Route::get('/registros/mostrar', function () {
    return view('factura');
});