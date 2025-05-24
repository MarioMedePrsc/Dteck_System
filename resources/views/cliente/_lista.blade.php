@if ($cliente->equipos->count())
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>descripcion</th>
         
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cliente->equipos as $equipo)
                <tr>
                    <td>{{ $equipo->id_cliente ?? 'No Aplica' }}</td>
                    <td>{{ $equipo->descripcion ?? 'No Aplica' }}</td>
  
                    <td>
                        <form action="{{ route('venta-detalles.destroy', $equipo->id) }}" method="POST">
                            <a class="btn btn-sm btn-primary " href="{{ route('venta-detalles.show',$equipo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                            <a class="btn btn-sm btn-success" href="{{ route('venta-detalles.edit',$equipo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                            @csrf
                            
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p class="text-muted">No hay Equipos registrados para este cliente.</p>
@endif
