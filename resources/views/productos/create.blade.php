@extends('layouts.app')

@section('content')
    <div class="container s">
        <form action="{{route('productos.store')}}"method="POST">
                    @include('productos.form');
                    <button class="btn btn-primary"> guardar</button>
        </form>

    </div>
@endsection