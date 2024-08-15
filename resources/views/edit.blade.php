@extends('layouts.master')

@section('title', 'Editar Cliente')

@section('content')
<div class="container my-5">
    <h1 class="mb-4 text-center">Editar Cliente</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST" class="w-75 mx-auto">
        @csrf
        @method('PATCH')

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nombres">Nombre</label>
                <input type="text" class="form-control" id="nombres" name="nombres" value="{{ old('nombres', $cliente->nombres) }}" required>
            </div>

            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $cliente->email) }}" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="direccion">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('direccion', $cliente->direccion) }}" required>
            </div>

            <div class="form-group col-md-6">
                <label for="fono">Celular</label>
                <input type="text" class="form-control" id="fono" name="fono" value="{{ old('fono', $cliente->fono) }}" required>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
</div>
@endsection
