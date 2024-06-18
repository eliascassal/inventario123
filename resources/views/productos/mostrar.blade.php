@extends('layout.plantilla')

@section('titulo','mostrar')

@section('contenido')

<h1>"El ID del producto es: " {{$producto->id}}</h1>
<br>

<p><strong>Nombre: </strong>{{$producto->nombre}}</p>
<p><strong>Precio: </strong>{{$producto->precio}}</p>
<p><strong>Descripcion </strong>{{$producto->descripcion}}</p>
<p><strong>Categoria: </strong>{{$producto->categoria}}</p>

<br>

<a href="{{route('producto.principal')}}">Volver</a>

@endsection
