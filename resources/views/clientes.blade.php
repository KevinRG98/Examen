@extends('layout')

@section('title','Listado de Clientes')
@section('content')
<div class="container">

    <div class="d-flex justify-content-between align-items-center py-5">
        <h1>Listado de Clientes</h1>
        <a href="{{ route('clientes.create') }}" class="btn btn-primary">Crear Cliente</a>
    </div>

    @if ($clientes->isEmpty())
        <div class="alert alert-warning text-center" role="alert">
            No hay clientes registrados.
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-hover table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->nombres }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>{{ $cliente->direccion }}</td>
                            <td>{{ $cliente->fono }}</td>
                            <td>
                                <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-info btn-sm">Ver</a>
                                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-secondary btn-sm">Editar</a>
                                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

    @if ($clientes->isNotEmpty())
        <div class="d-flex justify-content-center">
            {{ $clientes->links('vendor.pagination.bootstrap-4') }}
        </div>
    @endif
</div>
@endsection
