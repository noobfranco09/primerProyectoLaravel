@extends('layouts.app')

@section('content')
    <div class="container s">
        <form action="{{route('productos.update', $producto->id)}}" method="POST">
            @method('PUT')
            @include('productos.form');

            <button class="btn btn-primary"> guardar</button>
        </form>

    </div>
@endsection