@extends('layouts.app')

@section('template_title')
    {{ $articulo->name ?? __('Show') . " " . __('Articulo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Articulo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('articulos.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Descripcion:</strong>
                            {{ $articulo->descripcion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Tipo:</strong>
                            {{ $articulo->id_tipo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Iva:</strong>
                            {{ $articulo->id_iva }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Costo Unidad:</strong>
                            {{ $articulo->costo_unidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
