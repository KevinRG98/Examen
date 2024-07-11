@extends('layout')

@section('title', 'Crear Alumno')

@section('content')
<div class="container">
    <h2 class="text-center my-4">Registrar Nuevo Alumno</h2>
    <form action="{{ route('alumnos.store') }}" method="post" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label for="nombre" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
                @if ($errors->has('nombre'))
                    <span class="text-danger">{{ $errors->first('nombre') }}</span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="curso" class="col-sm-2 control-label">Curso</label>
            <div class="col-sm-10">
                <input type="text" name="curso" id="curso" class="form-control" placeholder="Curso">
                @if ($errors->has('curso'))
                    <span class="text-danger">{{ $errors->first('curso') }}</span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="nota_1" class="col-sm-2 control-label">Nota 1</label>
            <div class="col-sm-10">
                <input type="number" step="0.01" name="nota_1" id="nota_1" class="form-control" placeholder="Nota 1">
                @if ($errors->has('nota_1'))
                    <span class="text-danger">{{ $errors->first('nota_1') }}</span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="nota_2" class="col-sm-2 control-label">Nota 2</label>
            <div class="col-sm-10">
                <input type="number" step="0.01" name="nota_2" id="nota_2" class="form-control" placeholder="Nota 2">
                @if ($errors->has('nota_2'))
                    <span class="text-danger">{{ $errors->first('nota_2') }}</span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="fecha_reg" class="col-sm-2 control-label">Fecha de Registro</label>
            <div class="col-sm-10">
                <input type="date" name="fecha_reg" id="fecha_reg" class="form-control">
                @if ($errors->has('fecha_reg'))
                    <span class="text-danger">{{ $errors->first('fecha_reg') }}</span>
                @endif
            </div>
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
</div>
@endsection