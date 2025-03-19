@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between">
    <h2>Lista de Carros</h2>
    <a href="{{ route('carros.create') }}" class="btn btn-success">Agregar Carro</a>
</div>

@if(session('success'))
    <div class="alert alert-success mt-2">{{ session('success') }}</div>
@endif

<table class="table table-striped mt-3">
    <thead>
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Año</th>
            <th>Color</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($carros as $carro)
        <tr>
            <td>{{ $carro->marca }}</td>
            <td>{{ $carro->modelo }}</td>
            <td>{{ $carro->año }}</td>
            <td>{{ $carro->color }}</td>
            <td>${{ number_format($carro->precio, 2) }}</td>
            <td>
                <a href="{{ route('carros.edit', $carro) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('carros.destroy', $carro) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este carro?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $carros->links() }}
@endsection
