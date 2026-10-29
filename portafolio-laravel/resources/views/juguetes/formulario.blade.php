@extends('layouts.integradora')

@section('contenido')
    <h1>Jugueteria El Trompo</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <form action="/juguetes/nuevo" method="POST">
        @csrf

        <label for="nombre">Nombre del juguete:</label>
        <input type="text" id="nombre" name="nombre">

        <label for="precio">Precio en Bs:</label>
        <input type="number" id="precio" name="precio" >

        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock">

        <button type="submit">Registrar juguete</button>
    </form>
@endsection