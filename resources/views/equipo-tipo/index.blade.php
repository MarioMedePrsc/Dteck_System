@extends('layouts.app')

@section('template_title')
    Equipo Tipo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-black">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lista de tipos de equipo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('equipo-tipos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
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
                                        
										<th>Descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($equipoTipos as $equipoTipo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $equipoTipo->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('equipo-tipos.destroy',$equipoTipo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('equipo-tipos.show',$equipoTipo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('equipo-tipos.edit',$equipoTipo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $equipoTipos->links() !!}
            </div>
        </div>
    </div>
@endsection
