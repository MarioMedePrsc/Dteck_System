@if ($venta->detalles->count())
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Servicio</th>
                <th>Equipo</th>
                <th>Cantidad</th>
                <th>Costo Unidad</th>
                <th>IVA</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($venta->detalles as $detalle)
                <tr>
                    <td>{{ $detalle->id_servicio }}</td>
                    <td>{{ $detalle->id_equipo }}</td>
                    <td>{{ $detalle->cantidad }}</td>
                    <td>{{ $detalle->costo_unidad }}</td>
                    <td>{{ $detalle->iva }}</td>
                    <td>{{ $detalle->total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p class="text-muted">No hay articulos registrados para esta venta.</p>
@endif
