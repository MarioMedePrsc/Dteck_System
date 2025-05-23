@extends('layouts.app')

@section('template_title')
    Catalogo Iva
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-black">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Catalogo Iva') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('catalogo-ivas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Tasa Iva</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($catalogoIvas as $catalogoIva)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $catalogoIva->tasa_iva }}</td>

                                            <td>
                                                <form action="{{ route('catalogo-ivas.destroy',$catalogoIva->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('catalogo-ivas.show',$catalogoIva->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('catalogo-ivas.edit',$catalogoIva->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $catalogoIvas->links() !!}
            </div>
        </div>
    </div>
@endsection
