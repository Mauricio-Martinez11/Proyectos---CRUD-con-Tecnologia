@extends('admin')

@section('title', 'Crear Producto')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Crear Nuevo Producto</h3>
                    <div class="card-tools">
                        <a href="{{ route('productos.index') }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-left"></i> Volver
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('productos.store') }}" method="POST">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre">Nombre *</label>
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" 
                                           id="nombre" name="nombre" value="{{ old('nombre') }}" required>
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
                                        <option value="fruta" {{ old('tipo') == 'fruta' ? 'selected' : '' }}>Fruta</option>
                                        <option value="verdura" {{ old('tipo') == 'verdura' ? 'selected' : '' }}>Verdura</option>
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
                                           id="unidad" name="unidad" value="{{ old('unidad', 'kg') }}" required>
                                    @error('unidad')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="precio_unitario">Precio Unitario *</label>
                                    <input type="number" step="0.01" class="form-control @error('precio_unitario') is-invalid @enderror" 
                                           id="precio_unitario" name="precio_unitario" value="{{ old('precio_unitario') }}" min="0" required>
                                    @error('precio_unitario')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="stock">Stock *</label>
                                    <input type="number" step="0.001" class="form-control @error('stock') is-invalid @enderror" 
                                           id="stock" name="stock" value="{{ old('stock', 0) }}" min="0" required>
                                    @error('stock')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Guardar Producto
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
