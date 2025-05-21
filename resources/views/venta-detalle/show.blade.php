@extends('layouts.app')

@section('template_title')
    {{ $ventaDetalle->name ?? __('Show') . " " . __('Venta Detalle') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Venta Detalle</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('venta-detalles.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Id Venta:</strong>
                            {{ $ventaDetalle->id_venta }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Servicio:</strong>
                            {{ $ventaDetalle->id_servicio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Equipo:</strong>
                            {{ $ventaDetalle->id_equipo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Cantidad:</strong>
                            {{ $ventaDetalle->cantidad }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Costo Unidad:</strong>
                            {{ $ventaDetalle->costo_unidad }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tasa Iva:</strong>
                            {{ $ventaDetalle->tasa_iva }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Iva:</strong>
                            {{ $ventaDetalle->iva }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Subtotal:</strong>
                            {{ $ventaDetalle->subtotal }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Total:</strong>
                            {{ $ventaDetalle->total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
