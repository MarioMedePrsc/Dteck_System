<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $articulo?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_tipo" class="form-label">{{ __('Id Tipo') }}</label>
            <input type="text" name="id_tipo" class="form-control @error('id_tipo') is-invalid @enderror" value="{{ old('id_tipo', $articulo?->id_tipo) }}" id="id_tipo" placeholder="Id Tipo">
            {!! $errors->first('id_tipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_iva" class="form-label">{{ __('Id Iva') }}</label>
            <input type="text" name="id_iva" class="form-control @error('id_iva') is-invalid @enderror" value="{{ old('id_iva', $articulo?->id_iva) }}" id="id_iva" placeholder="Id Iva">
            {!! $errors->first('id_iva', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="costo_unidad" class="form-label">{{ __('Costo Unidad') }}</label>
            <input type="text" name="costo_unidad" class="form-control @error('costo_unidad') is-invalid @enderror" value="{{ old('costo_unidad', $articulo?->costo_unidad) }}" id="costo_unidad" placeholder="Costo Unidad">
            {!! $errors->first('costo_unidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>