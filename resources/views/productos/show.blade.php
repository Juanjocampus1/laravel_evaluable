@extends('layouts.app')

@section('title', $producto->nombre)

@section('content')
<p><a href="{{ route('productos.index') }}">← Volver a productos</a></p>

<h2>{{ $producto->nombre }}</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <td>{{ $producto->id }}</td>
    </tr>
    <tr>
        <th>Nombre</th>
        <td>{{ $producto->nombre }}</td>
    </tr>
    <tr>
        <th>Descripción</th>
        <td>{{ $producto->descripcion ?? 'Sin descripción' }}</td>
    </tr>
    <tr>
        <th>Precio</th>
        <td>{{ number_format($producto->precio, 2) }}€</td>
    </tr>
    <tr>
        <th>Stock</th>
        <td>{{ $producto->stock }} unidades</td>
    </tr>
    <tr>
        <th>Registrado</th>
        <td>{{ $producto->created_at->format('d/m/Y H:i') }}</td>
    </tr>
    <tr>
        <th>Última actualización</th>
        <td>{{ $producto->updated_at->format('d/m/Y H:i') }}</td>
    </tr>
</table>

<p>
    <a href="{{ route('productos.index') }}">Volver al catálogo</a>
</p>
@endsection
