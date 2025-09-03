@extends('admin')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Usuarios</span>
                    <span class="info-box-number">{{ \App\Models\Usuario::count() }}</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-success"><i class="fas fa-truck"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Transportistas</span>
                    <span class="info-box-number">{{ \App\Models\Transportista::count() }}</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-warning"><i class="fas fa-car"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Vehículos</span>
                    <span class="info-box-number">{{ \App\Models\Vehiculo::count() }}</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-danger"><i class="fas fa-box"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Productos</span>
                    <span class="info-box-number">{{ \App\Models\Producto::count() }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Acciones Rápidas</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <a href="{{ route('usuarios.create') }}" class="btn btn-primary btn-block mb-2">
                                <i class="fas fa-plus"></i> Nuevo Usuario
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="{{ route('transportistas.create') }}" class="btn btn-success btn-block mb-2">
                                <i class="fas fa-plus"></i> Nuevo Transportista
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="{{ route('vehiculos.create') }}" class="btn btn-warning btn-block mb-2">
                                <i class="fas fa-plus"></i> Nuevo Vehículo
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="{{ route('productos.create') }}" class="btn btn-danger btn-block mb-2">
                                <i class="fas fa-plus"></i> Nuevo Producto
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Enlaces de Navegación</h3>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="{{ route('usuarios.index') }}" class="list-group-item list-group-item-action">
                            <i class="fas fa-users mr-2"></i> Gestionar Usuarios
                        </a>
                        <a href="{{ route('transportistas.index') }}" class="list-group-item list-group-item-action">
                            <i class="fas fa-truck mr-2"></i> Gestionar Transportistas
                        </a>
                        <a href="{{ route('vehiculos.index') }}" class="list-group-item list-group-item-action">
                            <i class="fas fa-car mr-2"></i> Gestionar Vehículos
                        </a>
                        <a href="{{ route('productos.index') }}" class="list-group-item list-group-item-action">
                            <i class="fas fa-box mr-2"></i> Gestionar Productos
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
