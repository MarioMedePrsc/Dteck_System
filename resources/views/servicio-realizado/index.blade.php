@extends('layouts.app')

@section('template_title')
    Servicio Realizado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Servicio Realizado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('servicio-realizados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Venta Detalle</th>
										<th>Id Estatus</th>
										<th>Fecha Inicio</th>
										<th>Fecha Fin</th>
										<th>Notas</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($servicioRealizados as $servicioRealizado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $servicioRealizado->id_venta_detalle }}</td>
											<td>{{ $servicioRealizado->id_estatus }}</td>
											<td>{{ $servicioRealizado->fecha_inicio }}</td>
											<td>{{ $servicioRealizado->fecha_fin }}</td>
											<td>{{ $servicioRealizado->notas }}</td>

                                            <td>
                                                <form action="{{ route('servicio-realizados.destroy',$servicioRealizado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('servicio-realizados.show',$servicioRealizado->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('servicio-realizados.edit',$servicioRealizado->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $servicioRealizados->links() !!}
            </div>
        </div>
    </div>
@endsection
