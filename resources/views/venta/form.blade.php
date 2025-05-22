<div class="row padding-1 p-1">
    <div class="col-md-12 mb-2">
        <button type="submit" class="btn btn-primary">{{ __('Agregar') }}</button>
    </div>
    <div class="col-md-12">
        <div class="row">
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
                        
                        <input type="hidden" name="id_estatus" value="{{ $venta?->id_estatus }}">

                       
                        <input type="text" 
                            class="form-control @error('id_estatus') is-invalid @enderror" 
                            value="{{ $ventaEstatus[$venta?->id_estatus] ?? 'Desconocido' }}" 
                            readonly>
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
        <div class="row">
            
            <div class="col-md-8">
                @include('venta-detalle._lista', ['venta' => $venta])
                @if (isset($venta) && $venta->id)
                    <a href="{{ route('venta-detalles.create', ['venta_id' => $venta->id]) }}" class="btn btn-success">
                        Agregar artículo
                    </a>
                @endif
                

            </div>
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
 
    </div>
    
</div>