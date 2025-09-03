@extends('admin')

@section('title', 'Ver Producto')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detalles del Producto</h3>
                    <div class="card-tools">
                        <a href="{{ route('productos.index') }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-left"></i> Volver
                        </a>
                        <a href="{{ route('productos.edit', $producto) }}" class="btn btn-warning btn-sm">
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
                                    <td>{{ $producto->id }}</td>
                                </tr>
                                <tr>
                                    <th>Nombre:</th>
                                    <td>{{ $producto->nombre }}</td>
                                </tr>
                                <tr>
                                    <th>Tipo:</th>
                                    <td>
                                        <span class="badge badge-{{ $producto->tipo == 'fruta' ? 'success' : 'warning' }}">
                                            {{ ucfirst($producto->tipo) }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Unidad:</th>
                                    <td>{{ $producto->unidad }}</td>
                                </tr>
                                <tr>
                                    <th>Precio Unitario:</th>
                                    <td>${{ number_format($producto->precio_unitario, 2) }}</td>
                                </tr>
                                <tr>
                                    <th>Stock:</th>
                                    <td>{{ $producto->stock }}</td>
                                </tr>
                                <tr>
                                    <th>Estado:</th>
                                    <td>
                                        <span class="badge badge-{{ $producto->activo ? 'success' : 'secondary' }}">
                                            {{ $producto->activo ? 'Activo' : 'Inactivo' }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Creado:</th>
                                    <td>{{ $producto->created_at->format('d/m/Y H:i:s') }}</td>
                                </tr>
                                <tr>
                                    <th>Actualizado:</th>
                                    <td>{{ $producto->updated_at->format('d/m/Y H:i:s') }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="mt-3">
                        <a href="{{ route('productos.edit', $producto) }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Editar Producto
                        </a>
                        <a href="{{ route('productos.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Volver a la Lista
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
