@extends('layouts.app')

@section('template_title')
    {{ $servicioRealizado->name ?? __('Show') . " " . __('Servicio Realizado') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Servicio Realizado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('servicio-realizados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Id Venta Detalle:</strong>
                            {{ $servicioRealizado->id_venta_detalle }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Estatus:</strong>
                            {{ $servicioRealizado->id_estatus }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha Inicio:</strong>
                            {{ $servicioRealizado->fecha_inicio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha Fin:</strong>
                            {{ $servicioRealizado->fecha_fin }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Notas:</strong>
                            {{ $servicioRealizado->notas }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
