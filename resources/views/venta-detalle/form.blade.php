<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_venta" class="form-label">{{ __('Venta') }}</label>
            <input type="text" name="id_venta" class="form-control @error('id_venta') is-invalid @enderror" value="{{ old('id_venta', $venta->id) }}" id="id_venta" placeholder="Venta">
            {!! $errors->first('id_venta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        {{-- Select de Artículo --}}
        <div class="form-group mb-2 mb20">
            <label for="id_servicio" class="form-label">{{ __('Artículo') }}</label>
            <select name="id_servicio" id="id_servicio" class="form-control @error('id_servicio') is-invalid @enderror">
                <option value="">Seleccione un artículo</option>
                @foreach ($articulos as $articulo)
                    <option 
                        value="{{ $articulo->id }}"
                        data-costo="{{ $articulo->costo_unidad }}"
                        data-iva="{{ $articulo->iva->tasa_iva ?? 0 }}"
                        data-tipo="{{ $articulo->id_tipo }}"
                        {{ old('id_servicio', $ventaDetalle?->id_servicio) == $articulo->id ? 'selected' : '' }}
                    >
                        {{ $articulo->descripcion }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_servicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            

        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_equipo" class="form-label">{{ __('Equipo') }}</label>
            <select name="id_equipo" id="id_equipo" class="form-control @error('id_equipo') is-invalid @enderror">
                <option value="">-- Selecciona un equipo --</option>
                @foreach ($equipos as $id => $descripcion)
                    <option value="{{ $id }}" {{ old('id_equipo', $ventaDetalle?->id_equipo) == $id ? 'selected' : '' }}>
                        {{ $descripcion }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_equipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            <a href="{{ route('equipos.create', ['id_cliente' => $venta->id_cliente, 'venta_id' => $venta->id]) }}" class="btn btn-primary mb-2">
                Agregar equipo
            </a>

        </div>

        <div class="form-group mb-2 mb20">
            <label for="cantidad" class="form-label">{{ __('Cantidad') }}</label>
            <input type="text" name="cantidad" class="form-control @error('cantidad') is-invalid @enderror" value="{{ old('cantidad', $ventaDetalle?->cantidad) }}" id="cantidad" placeholder="Cantidad">
            {!! $errors->first('cantidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="costo_unidad" class="form-label">{{ __('Costo Unidad') }}</label>
            <input type="text" name="costo_unidad" class="form-control @error('costo_unidad') is-invalid @enderror" value="{{ old('costo_unidad', $ventaDetalle?->costo_unidad) }}" id="costo_unidad" placeholder="Costo Unidad">
            {!! $errors->first('costo_unidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tasa_iva" class="form-label">{{ __('Tasa Iva') }}</label>
            <input type="text" name="tasa_iva" class="form-control @error('tasa_iva') is-invalid @enderror" value="{{ old('tasa_iva', $ventaDetalle?->tasa_iva) }}" id="tasa_iva" placeholder="Tasa Iva">
            {!! $errors->first('tasa_iva', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="iva" class="form-label">{{ __('Iva') }}</label>
            <input type="text" name="iva" class="form-control @error('iva') is-invalid @enderror" value="{{ old('iva', $ventaDetalle?->iva) }}" id="iva" placeholder="Iva">
            {!! $errors->first('iva', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="subtotal" class="form-label">{{ __('Subtotal') }}</label>
            <input type="text" name="subtotal" class="form-control @error('subtotal') is-invalid @enderror" value="{{ old('subtotal', $ventaDetalle?->subtotal) }}" id="subtotal" placeholder="Subtotal">
            {!! $errors->first('subtotal', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="total" class="form-label">{{ __('Total') }}</label>
            <input type="text" name="total" class="form-control @error('total') is-invalid @enderror" value="{{ old('total', $ventaDetalle?->total) }}" id="total" placeholder="Total">
            {!! $errors->first('total', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
<script>
    const idServicio  = document.getElementById('id_servicio');
    const inputCosto  = document.getElementById('costo_unidad');
    const inputIva    = document.getElementById('tasa_iva');
    const inputEquipo = document.getElementById('id_equipo');

    function actualizarCampos() {
        const selected = idServicio.options[idServicio.selectedIndex];
        const costo    = selected.getAttribute('data-costo') || '';
        const iva      = selected.getAttribute('data-iva') || '';
        const tipo     = selected.getAttribute('data-tipo') || '';

        inputCosto.value = costo;
        inputIva.value = iva;

        
        if (tipo === '2') 
        {
            inputEquipo.removeAttribute('disabled');
        } else 
        {
            inputEquipo.setAttribute('disabled', 'disabled');
            inputEquipo.value = ''; 
        }
    }

    // Evento de cambio
    idServicio.addEventListener('change', actualizarCampos);

    // Llamarlo una vez al cargar si ya hay seleccionado
    window.addEventListener('DOMContentLoaded', actualizarCampos);
</script>

