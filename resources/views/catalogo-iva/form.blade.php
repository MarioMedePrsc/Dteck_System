<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="tasa_iva" class="form-label">{{ __('Tasa Iva') }}</label>
            <input type="text" name="tasa_iva" class="form-control @error('tasa_iva') is-invalid @enderror" value="{{ old('tasa_iva', $catalogoIva?->tasa_iva) }}" id="tasa_iva" placeholder="Tasa Iva">
            {!! $errors->first('tasa_iva', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>