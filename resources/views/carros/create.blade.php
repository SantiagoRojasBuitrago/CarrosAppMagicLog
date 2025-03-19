@extends('layouts.app')

@section('content')
<div class="card mt-4">
    <div class="card-header">
        <h2>Agregar Nuevo Carro</h2>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('carros.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="marca" class="form-label">Marca:</label>
                <input type="text" name="marca" id="marca" class="form-control" value="{{ old('marca') }}" required>
            </div>

            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo:</label>
                <input type="text" name="modelo" id="modelo" class="form-control" value="{{ old('modelo') }}" required>
            </div>

            <div class="mb-3">
                <label for="año" class="form-label">Año:</label>
                <input type="number" name="año" id="año" class="form-control" value="{{ old('año') }}" min="1900" max="{{ date('Y') }}" required>
            </div>

            <div class="mb-3">
                <label for="color" class="form-label">Color:</label>
                <input type="text" name="color" id="color" class="form-control" value="{{ old('color') }}" required>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio:</label>
                <input type="number" step="0.01" name="precio" id="precio" class="form-control" value="{{ old('precio') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('carros.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>
@endsection
