@extends('admin')

@section('title', 'Gestión de Vehículos')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Lista de Vehículos</h3>
                    <div class="card-tools">
                        <a href="{{ route('vehiculos.create') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Nuevo Vehículo
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
                                <th>Placa</th>
                                <th>Tipo</th>
                                <th>Transportista</th>
                                <th>Capacidad (kg)</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vehiculos as $vehiculo)
                            <tr>
                                <td>{{ $vehiculo->id }}</td>
                                <td>{{ $vehiculo->placa }}</td>
                                <td>
                                    <span class="badge badge-info">{{ ucfirst($vehiculo->tipo) }}</span>
                                </td>
                                <td>{{ $vehiculo->transportista->nombre ?? 'Sin asignar' }}</td>
                                <td>{{ $vehiculo->capacidad_kg ?? 'Sin especificar' }}</td>
                                <td>
                                    <span class="badge badge-{{ $vehiculo->activo ? 'success' : 'secondary' }}">
                                        {{ $vehiculo->activo ? 'Activo' : 'Inactivo' }}
                                    </span>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('vehiculos.show', $vehiculo) }}" class="btn btn-info btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('vehiculos.edit', $vehiculo) }}" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('vehiculos.destroy', $vehiculo) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este vehículo?')">
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
                        {{ $vehiculos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
