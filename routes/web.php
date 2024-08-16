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

