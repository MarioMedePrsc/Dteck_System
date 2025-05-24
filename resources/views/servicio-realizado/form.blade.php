<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20" style="display:none;">
            <label for="id_venta_detalle" class="form-label">{{ __('Id Venta Detalle') }}</label>
            <input type="text" name="id_venta_detalle" class="form-control @error('id_venta_detalle') is-invalid @enderror" value="{{ old('id_venta_detalle', $servicioRealizado?->id_venta_detalle) }}" id="id_venta_detalle" placeholder="Id Venta Detalle">
            {!! $errors->first('id_venta_detalle', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_estatus" class="form-label">{{ __('Estatus del Servicio') }}</label>
            <select name="id_estatus" id="id_estatus" class="form-control @error('id_estatus') is-invalid @enderror">
                <option value="">-- Seleccione --</option>
                @foreach($estatus as $id => $descripcion)
                    <option value="{{ $id }}" {{ old('id_estatus', $servicioRealizado?->id_estatus) == $id ? 'selected' : '' }}>
                        {{ $descripcion }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_estatus', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="fecha_inicio" class="form-label">{{ __('Fecha Inicio') }}</label>
            <input type="text" name="fecha_inicio" class="form-control @error('fecha_inicio') is-invalid @enderror" value="{{ old('fecha_inicio', $servicioRealizado?->fecha_inicio) }}" id="fecha_inicio" placeholder="Fecha Inicio" readonly>
            {!! $errors->first('fecha_inicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_fin" class="form-label">{{ __('Fecha Fin') }}</label>
            <input type="text" name="fecha_fin" class="form-control @error('fecha_fin') is-invalid @enderror" value="{{ old('fecha_fin', $servicioRealizado?->fecha_fin) }}" id="fecha_fin" placeholder="Fecha Fin" readonly>
            {!! $errors->first('fecha_fin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="notas" class="form-label">{{ __('Notas') }}</label>
            <input type="text" name="notas" class="form-control @error('notas') is-invalid @enderror" value="{{ old('notas', $servicioRealizado?->notas) }}" id="notas" placeholder="Notas">
            {!! $errors->first('notas', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    @if($servicioRealizado?->id_estatus == 1)
        <div class="col-md-12 mt20 mt-2">
            <button type="submit" class="btn btn-primary">{{ __('Aceptar') }}</button>
        </div>
    @endif

</div>
<script>
    const inptEstatus   = document.getElementById('id_estatus');

    document.addEventListener('DOMContentLoaded', function () {
        const formServicio = document.getElementById('formServicio');
        if (formServicio) 
        {
            formServicio.addEventListener('submit', function (event) 
            {
                if (inptEstatus.value != '1') 
                {
                    const confirmed = confirm('¿Deseas cambiar el estatus del servicio?, si lo haces ya no se podrá modificar este registro');
                    if (!confirmed) 
                    {
                        event.preventDefault(); 
                    }
                }
            });
        }

    });
</script>