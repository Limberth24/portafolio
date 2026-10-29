@extends('layouts.integradora')

@section('contenido')

    <p>Hay {{ count($juguetes) }} juguetes en el estante</p>

    <ul>
        @foreach ($juguetes as $juguete)
            <li>{{ $juguete->nombre }} — Bs {{ $juguete->precio }} — Stock: {{ $juguete->stock }}</li>
        @endforeach
    </ul>

    <p>Estante atendido por Limberth Mamani Tola</p>

    <a href="/juguetes/nuevo">Registrar un juguete nuevo</a>
@endsection