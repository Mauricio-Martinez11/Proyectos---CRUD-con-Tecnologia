@extends('admin')

@section('title', 'Gestión de Transportistas')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Lista de Transportistas</h3>
                    <div class="card-tools">
                        <a href="{{ route('transportistas.create') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Nuevo Transportista
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Teléfono</th>
                                <th>Licencia</th>
                                <th>Empresa</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transportistas as $transportista)
                            <tr>
                                <td>{{ $transportista->id }}</td>
                                <td>{{ $transportista->nombre }}</td>
                                <td>{{ $transportista->telefono ?? 'Sin teléfono' }}</td>
                                <td>{{ $transportista->licencia ?? 'Sin licencia' }}</td>
                                <td>{{ $transportista->empresa ?? 'Sin empresa' }}</td>
                                <td>
                                    <span class="badge badge-{{ $transportista->activo ? 'success' : 'secondary' }}">
                                        {{ $transportista->activo ? 'Activo' : 'Inactivo' }}
                                    </span>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('transportistas.show', $transportista) }}" class="btn btn-info btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('transportistas.edit', $transportista) }}" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('transportistas.destroy', $transportista) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este transportista?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        {{ $transportistas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
