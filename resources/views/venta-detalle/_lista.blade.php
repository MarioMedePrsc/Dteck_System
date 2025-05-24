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
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($venta->detalles as $detalle)
                <tr>
                    <td>{{ $detalle->articulo->descripcion ?? 'No Aplica' }}</td>
                    <td>{{ $detalle->equipo->descripcion ?? 'No Aplica' }}</td>
                    <td>{{ $detalle->cantidad }}</td>
                    <td>{{ $detalle->costo_unidad }}</td>
                    <td>{{ $detalle->iva }}</td>
                    <td>{{ $detalle->total }}</td>
                    <td>
                        @if ($venta->id_estatus == 1)
                            <form action="{{ route('venta-detalles.destroy', $detalle->id) }}" method="POST">
                                <a class="btn btn-sm btn-primary " href="{{ route('venta-detalles.show',$detalle->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                <a class="btn btn-sm btn-success" href="{{ route('venta-detalles.edit',$detalle->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                @csrf
                                
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                            </form>
                        @endif
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p class="text-muted">No hay articulos registrados para esta venta.</p>
@endif
