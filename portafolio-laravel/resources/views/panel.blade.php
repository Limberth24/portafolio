@extends('layouts.base')

@section('contenido')

    <section id="panel">

        <h2>Hola, {{ auth()->user()->name }}</h2>
        <p>Entraste con <strong>{{ auth()->user()->email }}</strong>.</p>

        <h3>Mensajes recibidos ({{ $mensajes->count() }})</h3>

        @if ($mensajes->isEmpty())
            <p class="panel-vacio">Todavía no llegó ningún mensaje desde el formulario de contacto.</p>
        @else
            <ul class="panel-mensajes">
                @foreach ($mensajes as $mensaje)
                    <li class="panel-mensaje">
                        <p>
                            <strong>{{ $mensaje->nombre }}</strong>
                            <a href="mailto:{{ $mensaje->correo }}">{{ $mensaje->correo }}</a>
                            <span class="panel-fecha">{{ $mensaje->created_at->format('d/m/Y H:i') }}</span>
                        </p>
                        <p>{!! nl2br(e($mensaje->mensaje)) !!}</p>
                    </li>
                @endforeach
            </ul>
        @endif

        <p><a href="/contacto">Ver el formulario de contacto</a></p>
        
        <form action="/logout" method="POST">
            @csrf
            <button type="submit">Cerrar sesión</button>
        </form>
    </section>

@endsection
