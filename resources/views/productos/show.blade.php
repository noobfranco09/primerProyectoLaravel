@extends('layouts.app')

@section('content')
    <div class="container bg bg-success">
        <h1>{{ $producto->id }}</h1>
        <p>{{ $producto->nombre }}</p>
        <p>{{ $producto->descripcion }}</p>
        <p>{{ $producto->precio }}</p>
        <p>{{ $producto->stock }}</p>
        <p>{{ $producto->marca }}</p>
        <p><strong>Precio: {{ $producto->precio }}</strong></p>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection