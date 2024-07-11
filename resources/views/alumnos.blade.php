@extends('layout')

@section('title','Listado')
@section('content')
<div class="container my-4">
    <h2 class="text-center mb-4">Alumnos</h2>
    @if ($alumnos->count())
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                    <tr>
                        <td>
                            <a href="{{ route('alumnos.show', $alumno->id) }}">{{ $alumno->nombre }}</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $alumnos->links('pagination::bootstrap-4') }}
        </div>
    @else
        <div class="alert alert-info text-center">
            No existe ningún alumno que mostrar.
        </div>
    @endif
</div>
@endsection
