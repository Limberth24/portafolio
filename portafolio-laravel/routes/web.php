<?php

use Illuminate\Support\Facades\Route;
use App\Models\Juguete;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/sobre-mi', function () {
    return view('inicio');
});

Route::get('/servicios', function () {
    return view('servicio');
});

Route::get('/proyectos', function () {
    return view('proyecto');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/juguetes', function () {
    return view('juguetes.lista');
});