<?php

use App\Models\Mensaje;
use Illuminate\Support\Facades\Auth;
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

Route::post('/contacto', function () {

    request()->validate([
        'nombre' => 'required|max:100',
        'correo' => 'required|email|max:150',
        'mensaje' => 'required|max:2000',
    ], [
        'nombre.required' => 'El nombre no puede quedar vacío.',
        'nombre.max' => 'El nombre es demasiado largo.',
        'correo.required' => 'El correo no puede quedar vacío.',
        'correo.email' => 'Ese correo no parece un correo válido.',
        'mensaje.required' => 'El mensaje no puede quedar vacío.',
        'mensaje.max' => 'El mensaje es demasiado largo (máximo 2000 caracteres).',
    ]);

    Mensaje::create([
        'nombre' => request()->input('nombre'),
        'correo' => request()->input('correo'),
        'mensaje' => request()->input('mensaje'),
    ]);

    return redirect('/contacto')->with('exito', '¡Gracias! Tu mensaje se guardó correctamente.');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function () {
    $credenciales = [
        'email' => request()->input('email'),
        'password' => request()->input('password'),
    ];

    if (Auth::attempt($credenciales)) {
        request()->session()->regenerate();

        return redirect('/panel');
    }

    return back()->with('error', 'Correo o contraseña incorrectos.');
});

Route::post('/logout', function () {
    Auth::logout();

    return redirect('/inicio');
});

Route::get('/panel', function () {
    $mensajes = Mensaje::all();

    return view('panel', ['mensajes' => $mensajes]);
})->middleware('auth');

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
        'stock'  => 'required|integer|min:0', 
    ], [
        'nombre.required' => 'Pone el nombre del juguete.',
        'precio.required' => 'Pone el precio del juguete.',
        'precio.integer'  => 'Aca el precio va entero, sin decimales ni letras.',
        'stock.required'  => 'Debes poner cuantas unidades hay en el estante.',
    ]);

    Juguete::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio'),
        'stock'  => request()->input('stock'),
    ]);

    return redirect('/juguetes');
});