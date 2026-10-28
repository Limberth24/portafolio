@extends('layouts.integradora')

@section('contenido')
    <h1>Jugueteria El Trompo</h1>
    <p>Los mejores juguetes del barrio ahora con inventario digital</p>

    <p>Hay {{ count($juguetes) }} juguetes en el estante</p>

    <ul>
        @foreach ($juguetes as $juguete)
            <li>{{ $juguete->nombre }} — Bs {{ $juguete->precio }}</li>
        @endforeach
    </ul>

    <p>Estante atendido por Limberth Mamani Tola</p>

    <a href="/juguetes/nuevo">Registrar un juguete nuevo</a>
@endsection