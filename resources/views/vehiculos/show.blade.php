@extends('admin')

@section('title', 'Ver Vehículo')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detalles del Vehículo</h3>
                    <div class="card-tools">
                        <a href="{{ route('vehiculos.index') }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-left"></i> Volver
                        </a>
                        <a href="{{ route('vehiculos.edit', $vehiculo) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="150">ID:</th>
                                    <td>{{ $vehiculo->id }}</td>
                                </tr>
                                <tr>
                                    <th>Placa:</th>
                                    <td>{{ $vehiculo->placa }}</td>
                                </tr>
                                <tr>
                                    <th>Tipo:</th>
                                    <td>
                                        <span class="badge badge-info">{{ ucfirst($vehiculo->tipo) }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Transportista:</th>
                                    <td>{{ $vehiculo->transportista->nombre ?? 'Sin asignar' }}</td>
                                </tr>
                                <tr>
                                    <th>Capacidad:</th>
                                    <td>{{ $vehiculo->capacidad_kg ?? 'Sin especificar' }} kg</td>
                                </tr>
                                <tr>
                                    <th>Estado:</th>
                                    <td>
                                        <span class="badge badge-{{ $vehiculo->activo ? 'success' : 'secondary' }}">
                                            {{ $vehiculo->activo ? 'Activo' : 'Inactivo' }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Creado:</th>
                                    <td>{{ $vehiculo->created_at->format('d/m/Y H:i:s') }}</td>
                                </tr>
                                <tr>
                                    <th>Actualizado:</th>
                                    <td>{{ $vehiculo->updated_at->format('d/m/Y H:i:s') }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="mt-3">
                        <a href="{{ route('vehiculos.edit', $vehiculo) }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Editar Vehículo
                        </a>
                        <a href="{{ route('vehiculos.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Volver a la Lista
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
