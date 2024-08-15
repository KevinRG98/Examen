@extends('layout')

@section('title', 'Crear Cliente')

@section('content')
<div class="container">
    <h2 class="text-center my-4">Registrar Nuevo Cliente</h2>
    <form action="{{ route('clientes.store') }}" method="post" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label for="nombres" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Nombre">
                @if ($errors->has('nombres'))
                    <span class="text-danger">{{ $errors->first('nombres') }}</span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="direccion" class="col-sm-2 control-label">direccion</label>
            <div class="col-sm-10">
                <input type="text"  name="direccion" id="direccion" class="form-control" placeholder="Direccion">
                @if ($errors->has('direccion'))
                    <span class="text-danger">{{ $errors->first('direccion') }}</span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="fono" class="col-sm-2 control-label">Celular</label>
            <div class="col-sm-10">
                <input type="text"  name="fono" id="fono" class="form-control" placeholder="Celular">
                @if ($errors->has('fono'))
                    <span class="text-danger">{{ $errors->first('fono') }}</span>
                @endif
            </div>
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
</div>
@endsection