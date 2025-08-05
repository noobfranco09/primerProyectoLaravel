@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Productos</h1>
        <a href="{{ route('productos.create') }}" class="btn btn-primary">Crear Producto</a>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('succes') }}
            </div>
        @endif
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->nombre }}</td>
                        <td>${{ $producto->precio }}</td>
                        <td>
                            <a href="{{ route('productos.show', $producto) }}" class="btn btn-sm btn-info">Ver</a>
                            <a href="{{ route('productos.edit', $producto) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"
                                    onclick="return confirm ('¿Eliminar Producto?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>

                @endforeach

            </tbody>
        </table>
    </div>
@endsection