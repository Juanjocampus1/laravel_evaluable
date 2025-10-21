@extends('layouts.app')

@section('title', 'Lista de Productos')

@section('content')
<h2>Catálogo de Productos</h2>

@if($productos->count() > 0)
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ Str::limit($producto->descripcion, 50) }}</td>
                    <td>{{ number_format($producto->precio, 2) }}€</td>
                    <td>{{ $producto->stock }}</td>
                    <td>
                        <a href="{{ route('productos.show', $producto->id) }}">Ver Detalles</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No hay productos disponibles.</p>
@endif
@endsection
