@extends('layouts.base')

@section('contenido')

    <section id="login">
        <h2>Entrar al panel</h2>

        <form id="form-login" action="/login" method="POST" novalidate>
            @csrf

            <label for="email">Correo:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Entrar</button>

            <p id="aviso-login" class="aviso @if (session('error')) error @endif" aria-live="polite">{{ session('error') }}</p>
        </form>
    </section>

@endsection
