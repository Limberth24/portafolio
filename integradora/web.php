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
    $juguetes = Juguete::all();
    return view('juguetes.lista', ['juguetes' => $juguetes]);
});

Route::get('/juguetes/nuevo', function () {
    return view('juguetes.formulario');
});

Route::post('/juguetes/nuevo', function () {
    request()->validate([
        'nombre' => 'required',
        'precio' => 'required|integer',
    ], [
        'nombre.required' => 'Pone el nombre del juguete.',
        'precio.required' => 'Pone el precio del juguete.',
        'precio.integer'  => 'Aca el precio va entero, sin decimales ni letras.',
    ]);

    Juguete::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio'),
    ]);

    return redirect('/juguetes');
});