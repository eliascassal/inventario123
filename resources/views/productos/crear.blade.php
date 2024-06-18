@extends('layout.plantilla')

@section('titulo', 'crear')

@section('contenido')

    <h1>"aqui se creara un nuevo producto"</h1>
    <br>

    <form action="{{route('producto.store')}}" method="POST">
        @csrf
        <label>
            nombre del producto:
            <br>
            <input type="text" name="nombre">
        </label>
        <br><label>
            precio:
            <br>
            <input type="text" name="precio">
        </label>
        <br>
        <br><label>
            descripcion:
            <br>
            <input type="text" name="descripcion">
        </label>
        <br>
        <br><label>
            categoria:
            <br>
            <input type="text" name="categoria">
        </label>

        <button type="submit"> Guardar</button>

    </form>

@endsection
