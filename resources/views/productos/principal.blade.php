@extends('layout.plantilla')

@section('titulo','principal')

@section('contenido')

<H1>Aqui se va mostrar todos los poductos</H1>
<br>
<a href="{{route('producto.crear')}}">Nuevo Registro</a>
<br>
<br>

@foreach ($prod as $produ )
<li>

    <a href="{{route('producto.mostrar',$produ->id)}}">Nombre:{{$produ->nombre}}, Categoria:{{$produ->categoria}}</a>

</li>

@endforeach

{{$prod->links()}};


@endsection
