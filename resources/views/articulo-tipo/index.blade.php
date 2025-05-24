@extends('layouts.app')

@section('template_title')
    Articulo Tipo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-black">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lista de tipos de Articulos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('articulo-tipos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                    <div class="card-body">
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
                                    @foreach ($articuloTipos as $articuloTipo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $articuloTipo->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('articulo-tipos.destroy',$articuloTipo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('articulo-tipos.edit',$articuloTipo->id) }}"><i class="fa fa-fw fa-edit"></i> </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $articuloTipos->links() !!}
            </div>
        </div>
    </div>
@endsection
