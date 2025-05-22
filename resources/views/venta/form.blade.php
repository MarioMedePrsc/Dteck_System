<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="folio" class="form-label">{{ __('Folio') }}</label>
            <input type="text" name="folio" class="form-control @error('folio') is-invalid @enderror" value="{{ old('folio', $venta?->folio) }}" id="folio" placeholder="Folio">
            {!! $errors->first('folio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_cliente" class="form-label">{{ __('Id Cliente') }}</label>
            <input type="text" name="id_cliente" class="form-control @error('id_cliente') is-invalid @enderror" value="{{ old('id_cliente', $venta?->id_cliente) }}" id="id_cliente" placeholder="Id Cliente">
            {!! $errors->first('id_cliente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_usuario" class="form-label">{{ __('Id Usuario') }}</label>
            <input type="text" name="id_usuario" class="form-control @error('id_usuario') is-invalid @enderror" value="{{ old('id_usuario', $venta?->id_usuario) }}" id="id_usuario" placeholder="Id Usuario">
            {!! $errors->first('id_usuario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_creacion" class="form-label">{{ __('Fecha Creacion') }}</label>
            <input type="text" name="fecha_creacion" class="form-control @error('fecha_creacion') is-invalid @enderror" value="{{ old('fecha_creacion', $venta?->fecha_creacion) }}" id="fecha_creacion" placeholder="Fecha Creacion">
            {!! $errors->first('fecha_creacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="subtotal" class="form-label">{{ __('Subtotal') }}</label>
            <input type="text" name="subtotal" class="form-control @error('subtotal') is-invalid @enderror" value="{{ old('subtotal', $venta?->subtotal) }}" id="subtotal" placeholder="Subtotal">
            {!! $errors->first('subtotal', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="total_iva" class="form-label">{{ __('Total Iva') }}</label>
            <input type="text" name="total_iva" class="form-control @error('total_iva') is-invalid @enderror" value="{{ old('total_iva', $venta?->total_iva) }}" id="total_iva" placeholder="Total Iva">
            {!! $errors->first('total_iva', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="total" class="form-label">{{ __('Total') }}</label>
            <input type="text" name="total" class="form-control @error('total') is-invalid @enderror" value="{{ old('total', $venta?->total) }}" id="total" placeholder="Total">
            {!! $errors->first('total', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_estatus" class="form-label">{{ __('Id Estatus') }}</label>
            <input type="text" name="id_estatus" class="form-control @error('id_estatus') is-invalid @enderror" value="{{ old('id_estatus', $venta?->id_estatus) }}" id="id_estatus" placeholder="Id Estatus">
            {!! $errors->first('id_estatus', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="total_unidades" class="form-label">{{ __('Total Unidades') }}</label>
            <input type="text" name="total_unidades" class="form-control @error('total_unidades') is-invalid @enderror" value="{{ old('total_unidades', $venta?->total_unidades) }}" id="total_unidades" placeholder="Total Unidades">
            {!! $errors->first('total_unidades', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>