<div class="row padding-1 p-1">

    <div class="col-md-12 mb-2">
        @if (isset($venta) && $venta->id )
            @if ($venta->id_estatus == 1)
                <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
            @endif
        @else
            <button type="submit" class="btn btn-primary">{{ __('Agregar') }}</button>
        @endif

        

    </div>
    <div class="col-md-12">
        <div class="row">
            <input type="hidden" name="venta_id" id="venta_id" value="{{ $venta->id ?? 0 }}">
            <div class="col-md-6 mb-2">
                <div class="row align-items-center">
                    <label for="id_usuario" class="col-sm-4 col-form-label">{{ __('Usuario') }}</label>
                    <div class="col-sm-8">
                        <input type="hidden" name="id_usuario" value="{{ $venta?->id_usuario }}">
                        <input type="text" class="form-control" value="{{ $usuarios[$venta?->id_usuario] ?? 'Usuario' }}" readonly>
                        {!! $errors->first('id_usuario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-2">
                <div class="row align-items-center">
                    <label for="fecha_creacion" class="col-sm-4 col-form-label">{{ __('Fecha Creacion') }}</label>
                    <div class="col-sm-8">
                        <input type="text" name="fecha_creacion" class="form-control @error('fecha_creacion') is-invalid @enderror" value="{{ old('fecha_creacion', $venta?->fecha_creacion) }}" id="fecha_creacion" placeholder="Fecha Creacion" readonly >
                        {!! $errors->first('fecha_creacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="row align-items-center">
                    <label for="folio" class="col-sm-4 col-form-label">{{ __('Folio') }}</label>
                    <div class="col-sm-8">
                        <input type="text" name="folio" class="form-control @error('folio') is-invalid @enderror" value="{{ old('folio', $venta?->folio) }}" id="folio" placeholder="Folio" readonly >
                        {!! $errors->first('folio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="row align-items-center">
                    <label for="id_estatus" class="col-sm-4 col-form-label">{{ __('Estatus') }}</label>
                    <div class="col-sm-8">
                        <select name="id_estatus" id="id_estatus" class="form-control @error('id_estatus') is-invalid @enderror">
                            @foreach($ventaEstatus as $id => $descripcion)
                                <option value="{{ $id }}" {{ (old('id_estatus', $venta?->id_estatus) == $id) ? 'selected' : '' }}>
                                    {{ $descripcion }}
                                </option>
                            @endforeach
                        </select>
                        {!! $errors->first('id_estatus', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-2">
                <div class="row align-items-center">
                    <label for="id_cliente" class="col-sm-4 col-form-label">{{ __('Cliente') }}</label>
                    <div class="col-sm-8">
                        <select name="id_cliente" class="form-select @error('id_cliente') is-invalid @enderror" id="id_cliente">
                            <option value="">Seleccione un cliente</option>
                            @foreach($clientes as $id => $nombre)
                                <option value="{{ $id }}" {{ old('id_cliente', $venta?->id_cliente) == $id ? 'selected' : '' }}>
                                    {{ $nombre }}
                                </option>
                            @endforeach
                        </select>
                        {!! $errors->first('id_cliente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                    
                </div>

            </div>
            <div class="col-md-6">
                
            </div>
        </div>
        <hr/>
        <div class="row" style="display: none;">
            
            <div class="col-md-4">
                <div class="form-group mb-2 mb20">
                    <label for="total_unidades" class="form-label">{{ __('Total Unidades') }}</label>
                    <input type="text" name="total_unidades" class="form-control @error('total_unidades') is-invalid @enderror" value="{{ old('total_unidades', $venta?->total_unidades) }}" id="total_unidades" placeholder="Total Unidades" readonly >
                    {!! $errors->first('total_unidades', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                
                <div class="form-group mb-2 mb20">
                    <label for="total_iva" class="form-label">{{ __('Total Iva') }}</label>
                    <input type="text" name="total_iva" class="form-control @error('total_iva') is-invalid @enderror" value="{{ old('total_iva', $venta?->total_iva) }}" id="total_iva" placeholder="Total Iva" readonly >
                    {!! $errors->first('total_iva', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20">
                    <label for="subtotal" class="form-label">{{ __('Subtotal') }}</label>
                    <input type="text" name="subtotal" class="form-control @error('subtotal') is-invalid @enderror" value="{{ old('subtotal', $venta?->subtotal) }}" id="subtotal" placeholder="Subtotal" readonly >
                    {!! $errors->first('subtotal', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
                <div class="form-group mb-2 mb20">
                    <label for="total" class="form-label">{{ __('Total') }}</label>
                    <input type="text" name="total" class="form-control @error('total') is-invalid @enderror" value="{{ old('total', $venta?->total) }}" id="total" placeholder="Total" readonly> 
                    {!! $errors->first('total', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
            </div>

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

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>

    
</div>

<script>
    const inptEstatus   = document.getElementById('id_estatus');
    const inptIdVenta   = document.getElementById('venta_id');
    const inptCliente   = document.getElementById('id_cliente');
  
    document.addEventListener('DOMContentLoaded', function () {
        const formVenta = document.getElementById('formVenta');
        if (formVenta) 
        {
            formVenta.addEventListener('submit', function (event) 
            {
                if ((inptIdVenta && inptIdVenta.value != 0) && inptEstatus.value != '1') 
                {
                    const confirmed = confirm('¿Deseas cambiar el estatus de la Venta?, si lo haces ya no se podrá modificar el registro');
                    if (!confirmed) 
                    {
                        event.preventDefault(); 
                    }
                }
            });
        }

        if((inptIdVenta && inptIdVenta.value != 0) && inptEstatus.value != '1')
        {
            inptEstatus.style.pointerEvents = 'none';
            inptEstatus.style.backgroundColor = '#e9ecef'; 
    
            inptCliente.style.pointerEvents = 'none';
            inptCliente.style.backgroundColor = '#e9ecef'; 
           
        }
        if(inptIdVenta && inptIdVenta.value == 0)
        {
            inptEstatus.style.pointerEvents = 'none';
            inptEstatus.style.backgroundColor = '#e9ecef'; 
        }
    });

</script>

