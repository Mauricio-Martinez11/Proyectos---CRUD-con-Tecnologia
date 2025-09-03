@extends('admin')

@section('title', 'Ver Usuario')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detalles del Usuario</h3>
                    <div class="card-tools">
                        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-left"></i> Volver
                        </a>
                        <a href="{{ route('usuarios.edit', $usuario) }}" class="btn btn-warning btn-sm">
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
                                    <td>{{ $usuario->id }}</td>
                                </tr>
                                <tr>
                                    <th>Nombre:</th>
                                    <td>{{ $usuario->nombre }}</td>
                                </tr>
                                <tr>
                                    <th>Email:</th>
                                    <td>{{ $usuario->email ?? 'Sin email' }}</td>
                                </tr>
                                <tr>
                                    <th>Teléfono:</th>
                                    <td>{{ $usuario->telefono ?? 'Sin teléfono' }}</td>
                                </tr>
                                <tr>
                                    <th>Rol:</th>
                                    <td>
                                        <span class="badge badge-{{ $usuario->rol == 'admin' ? 'danger' : ($usuario->rol == 'transportista' ? 'warning' : 'info') }}">
                                            {{ ucfirst($usuario->rol) }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Estado:</th>
                                    <td>
                                        <span class="badge badge-{{ $usuario->activo ? 'success' : 'secondary' }}">
                                            {{ $usuario->activo ? 'Activo' : 'Inactivo' }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Creado:</th>
                                    <td>{{ $usuario->created_at->format('d/m/Y H:i:s') }}</td>
                                </tr>
                                <tr>
                                    <th>Actualizado:</th>
                                    <td>{{ $usuario->updated_at->format('d/m/Y H:i:s') }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="mt-3">
                        <a href="{{ route('usuarios.edit', $usuario) }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Editar Usuario
                        </a>
                        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Volver a la Lista
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
