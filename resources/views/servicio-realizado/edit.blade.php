@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Servicio Realizado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card-black">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} Servicio </span>
                    </div>
                    <div class="card-body bg-white">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Cliente:</label>
                                <p><strong>{{ $servicioRealizado->ventaDetalle->venta->cliente->nombre ?? '-' }}</strong></p>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Servicio:</label>
                                <p><strong>{{ $servicioRealizado->ventaDetalle->articulo->descripcion ?? '-' }}</strong></p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Equipo:</label>
                                <p><strong>{{ $servicioRealizado->ventaDetalle->equipo->descripcion ?? '-' }}</strong></p>
                            </div>

                           
                            <div class="col-md-6"></div>
                        </div>
                        <hr/>

                        <form method="POST" action="{{ route('servicio-realizados.update', $servicioRealizado->id) }}"  role="form" enctype="multipart/form-data" id="formServicio">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('servicio-realizado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
