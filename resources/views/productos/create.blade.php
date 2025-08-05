@extends('layouts.app')

@section('content')
    <div class="container s">
        <form action="{{route('productos.store')}}"method="POST">
                    @include('productos.form');
                    
        </form>

    </div>
@endsection