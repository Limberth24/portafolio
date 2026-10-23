@extends('layouts.base')

@section('contenido')

    <section id="contacto">
        <h2>Contacto</h2>
        <p>Escríbeme por aquí:</p>
        <form id="form-contacto" novalidate>
            <label for="nombre">Nombre Completo:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ej. Pedro Alcocer Marin" required>
            <label for="correo">Correo electronico:</label>
            <input type="email" id="correo" name="correo" placeholder="Ej. tucorreo@gmail.com" required>
            <label for="msg">Mensaje:</label>
            <textarea id="msg" rows="4" required></textarea>
            <button type="submit">Enviar</button>
            <p id="aviso-contacto" class="aviso"></p>
        </form>
    </section>
    
@endsection