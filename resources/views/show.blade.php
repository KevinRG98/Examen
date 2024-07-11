@extends('layout')

@section('title','Alumno | ' . $alumno->nombre)

@section('content')
<div class="container my-4">
    <h2 class="text-center mb-4">{{ $alumno->nombre }}</h2>
    <table class="table table-striped table-bordered">
        <tbody>
            <tr>
                <th>Nombre</th>
                <td>{{ $alumno->nombre }}</td>
            </tr>
            <tr>
                <th>Curso</th>
                <td>{{ $alumno->curso }}</td>
            </tr>
            <tr>
                <th>Nota 1</th>
                <td>{{ $alumno->nota_1 }}</td>
            </tr>
            <tr>
                <th>Nota 2</th>
                <td>{{ $alumno->nota_2 }}</td>
            </tr>
            <tr>
                <th>Promedio</th>
                <td>{{ $alumno->promedio }}</td>
            </tr>
            <tr>
                <th>Condición</th>
                <td>{{ $alumno->condicion }}</td>
            </tr>
            <tr>
                <th>Registrado</th>
                <td>{{ $alumno->created_at->diffForHumans() }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
