@extends('admin')

@section('title', 'Editar Vehículo')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar Vehículo: {{ $vehiculo->placa }}</h3>
                    <div class="card-tools">
                        <a href="{{ route('vehiculos.index') }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-left"></i> Volver
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('vehiculos.update', $vehiculo) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="transportista_id">Transportista *</label>
                                    <select class="form-control @error('transportista_id') is-invalid @enderror" id="transportista_id" name="transportista_id" required>
                                        <option value="">Seleccione un transportista</option>
                                        @foreach(\App\Models\Transportista::where('activo', true)->get() as $transportista)
                                            <option value="{{ $transportista->id }}" {{ old('transportista_id', $vehiculo->transportista_id) == $transportista->id ? 'selected' : '' }}>
                                                {{ $transportista->nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('transportista_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="placa">Placa *</label>
                                    <input type="text" class="form-control @error('placa') is-invalid @enderror" 
                                           id="placa" name="placa" value="{{ old('placa', $vehiculo->placa) }}" required>
                                    @error('placa')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tipo">Tipo *</label>
                                    <select class="form-control @error('tipo') is-invalid @enderror" id="tipo" name="tipo" required>
                                        <option value="">Seleccione el tipo</option>
                                        <option value="camion" {{ old('tipo', $vehiculo->tipo) == 'camion' ? 'selected' : '' }}>Camión</option>
                                        <option value="camioneta" {{ old('tipo', $vehiculo->tipo) == 'camioneta' ? 'selected' : '' }}>Camioneta</option>
                                        <option value="furgon" {{ old('tipo', $vehiculo->tipo) == 'furgon' ? 'selected' : '' }}>Furgón</option>
                                        <option value="moto" {{ old('tipo', $vehiculo->tipo) == 'moto' ? 'selected' : '' }}>Moto</option>
                                    </select>
                                    @error('tipo')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="capacidad_kg">Capacidad (kg)</label>
                                    <input type="number" class="form-control @error('capacidad_kg') is-invalid @enderror" 
                                           id="capacidad_kg" name="capacidad_kg" value="{{ old('capacidad_kg', $vehiculo->capacidad_kg) }}" min="0">
                                    @error('capacidad_kg')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Actualizar Vehículo
                            </button>
                            <a href="{{ route('vehiculos.index') }}" class="btn btn-secondary">
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
