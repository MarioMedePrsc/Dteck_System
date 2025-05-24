<div class="row padding-1 p-1">
    <div class="col-md-12">
     

        <div class="form-group mb-2 mb20" style="display:none;">
            <label for="id_cliente" class="form-label">{{ __('Cliente') }}</label>
            <input type="text" name="id_cliente" class="form-control @error('id_cliente') is-invalid @enderror" value="{{ old('id_cliente', $clienteId) }}" id="id_cliente" readonly>
            {!! $errors->first('id_cliente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

       <div class="form-group mb-2 mb20">
            <label for="id_tipo" class="form-label">{{ __('Tipo de Equipo') }}</label>
            <select name="id_tipo" id="id_tipo" class="form-control @error('id_tipo') is-invalid @enderror">
                <option value="">-- Selecciona un tipo --</option>
                @foreach($tipos as $id => $descripcion)
                    <option value="{{ $id }}" {{ old('id_tipo', $equipo?->id_tipo) == $id ? 'selected' : '' }}>
                        {{ $descripcion }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_tipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="id_marca" class="form-label">{{ __('Marca') }}</label>
            <select name="id_marca" id="id_marca" class="form-control @error('id_marca') is-invalid @enderror">
                <option value="">-- Selecciona una marca --</option>
                @foreach($marcas as $id => $descripcion)
                    <option value="{{ $id }}" {{ old('id_marca', $equipo?->id_marca) == $id ? 'selected' : '' }}>
                        {{ $descripcion }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_marca', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="modelo" class="form-label">{{ __('Modelo') }}</label>
            <input type="text" name="modelo" class="form-control @error('modelo') is-invalid @enderror" value="{{ old('modelo', $equipo?->modelo) }}" id="modelo" placeholder="Modelo">
            {!! $errors->first('modelo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="numero_serie" class="form-label">{{ __('Numero Serie') }}</label>
            <input type="text" name="numero_serie" class="form-control @error('numero_serie') is-invalid @enderror" value="{{ old('numero_serie', $equipo?->numero_serie) }}" id="numero_serie" placeholder="Numero Serie">
            {!! $errors->first('numero_serie', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $equipo?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Aceptar') }}</button>
    </div>
</div>