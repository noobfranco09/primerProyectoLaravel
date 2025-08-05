@extends('layouts.app')

@section('content')
    <div class="container bg bg-success">
        <h1>{{ $producto->nombre }}</h1>
        <p>{{ $producto->descripcion }}</p>
        <p><strong>Precio: {{ $producto->precio }}</strong></p>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection