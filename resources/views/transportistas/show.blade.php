@extends('admin')

@section('title', 'Ver Transportista')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detalles del Transportista</h3>
                    <div class="card-tools">
                        <a href="{{ route('transportistas.index') }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-left"></i> Volver
                        </a>
                        <a href="{{ route('transportistas.edit', $transportista) }}" class="btn btn-warning btn-sm">
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
                                    <td>{{ $transportista->id }}</td>
                                </tr>
                                <tr>
                                    <th>Nombre:</th>
                                    <td>{{ $transportista->nombre }}</td>
                                </tr>
                                <tr>
                                    <th>Teléfono:</th>
                                    <td>{{ $transportista->telefono ?? 'Sin teléfono' }}</td>
                                </tr>
                                <tr>
                                    <th>Licencia:</th>
                                    <td>{{ $transportista->licencia ?? 'Sin licencia' }}</td>
                                </tr>
                                <tr>
                                    <th>Empresa:</th>
                                    <td>{{ $transportista->empresa ?? 'Sin empresa' }}</td>
                                </tr>
                                <tr>
                                    <th>Estado:</th>
                                    <td>
                                        <span class="badge badge-{{ $transportista->activo ? 'success' : 'secondary' }}">
                                            {{ $transportista->activo ? 'Activo' : 'Inactivo' }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Creado:</th>
                                    <td>{{ $transportista->created_at->format('d/m/Y H:i:s') }}</td>
                                </tr>
                                <tr>
                                    <th>Actualizado:</th>
                                    <td>{{ $transportista->updated_at->format('d/m/Y H:i:s') }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="mt-3">
                        <a href="{{ route('transportistas.edit', $transportista) }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Editar Transportista
                        </a>
                        <a href="{{ route('transportistas.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Volver a la Lista
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
