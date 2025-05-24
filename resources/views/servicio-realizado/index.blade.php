@extends('layouts.app')

@section('template_title')
    Servicio Realizado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-black">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lista de Servicios Realizados') }}
                            </span>

                             <div class="float-right">
                                <a style="display: none;" href="{{ route('servicio-realizados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('+ Nuevo') }}
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
                                        <th>Cliente</th>
										<th>Equipo</th>
                                        <th>Artículo</th>
										<th>Estatus</th>
										<th>Fecha Inicio</th>
										<th>Fecha Fin</th>
										

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($servicioRealizados as $servicioRealizado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $servicioRealizado->ventaDetalle?->venta?->cliente?->nombre ?? 'Sin cliente' }}</td>
											<td>{{ $servicioRealizado->ventaDetalle?->equipo?->descripcion ?? 'Sin equipo' }}</td>
                                            <td>{{ $servicioRealizado->ventaDetalle?->articulo?->descripcion ?? 'Sin artículo' }}</td>
                                            
											<td>{{ $servicioRealizado->estatus?->descripcion ?? 'Sin estatus' }}</td>
											<td>{{ $servicioRealizado->fecha_inicio }}</td>
											<td>{{ $servicioRealizado->fecha_fin }}</td>
										

                                            <td>
                                                <form action="{{ route('servicio-realizados.destroy',$servicioRealizado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('servicio-realizados.edit',$servicioRealizado->id) }}"><i class="fa fa-fw fa-edit"></i> </a>
                                                    @csrf
                                                    @method('DELETE')
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
