@extends('admin')

@section('title', 'Editar Producto')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar Producto: {{ $producto->nombre }}</h3>
                    <div class="card-tools">
                        <a href="{{ route('productos.index') }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-left"></i> Volver
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('productos.update', $producto) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre *</label>
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" 
                                           id="nombre" name="nombre" value="{{ old('nombre', $producto->nombre) }}" required>
                                    @error('nombre')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tipo">Tipo *</label>
                                    <select class="form-control @error('tipo') is-invalid @enderror" id="tipo" name="tipo" required>
                                        <option value="">Seleccione el tipo</option>
                                        <option value="fruta" {{ old('tipo', $producto->tipo) == 'fruta' ? 'selected' : '' }}>Fruta</option>
                                        <option value="verdura" {{ old('tipo', $producto->tipo) == 'verdura' ? 'selected' : '' }}>Verdura</option>
                                    </select>
                                    @error('tipo')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="unidad">Unidad *</label>
                                    <input type="text" class="form-control @error('unidad') is-invalid @enderror" 
                                           id="unidad" name="unidad" value="{{ old('unidad', $producto->unidad) }}" required>
                                    @error('unidad')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="precio_unitario">Precio Unitario *</label>
                                    <input type="number" step="0.01" class="form-control @error('precio_unitario') is-invalid @enderror" 
                                           id="precio_unitario" name="precio_unitario" value="{{ old('precio_unitario', $producto->precio_unitario) }}" min="0" required>
                                    @error('precio_unitario')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="stock">Stock *</label>
                                    <input type="number" step="0.001" class="form-control @error('stock') is-invalid @enderror" 
                                           id="stock" name="stock" value="{{ old('stock', $producto->stock) }}" min="0" required>
                                    @error('stock')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Actualizar Producto
                            </button>
                            <a href="{{ route('productos.index') }}" class="btn btn-secondary">
                                <i class="fas fa-times"></i> Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
