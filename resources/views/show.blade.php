@extends('layout')

@section('title','Cliente | ' . $cliente->nombre)

@section('content')
<div class="container my-4">
    <h2 class="text-center mb-4">{{ $cliente->nombre }}</h2>
    <table class="table table-striped table-bordered">
        <tbody>
            <tr>
                <th>Nombre</th>
                <td>{{ $cliente->nombres }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $cliente->email }}</td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td>{{ $cliente->direccion }}</td>
            </tr>
            <tr>
                <th>Celular</th>
                <td>{{ $cliente->fono}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
