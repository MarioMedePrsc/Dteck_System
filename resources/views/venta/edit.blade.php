@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Venta
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card-black">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        
                        <div class="float-left">
                            <span class="card-title">{{ __('Detalle de') }} Venta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" 
                            href="{{ route('ventas.index')}}">
                                {{ __('Back') }}
                            </a>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('ventas.update', $venta->id) }}"  role="form" enctype="multipart/form-data" id="formVenta">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('venta.form')

                        </form>
                        <div class="row">
                            <div class="col-md-8">
                                @include('venta-detalle._lista', ['venta' => $venta])
                                @if (isset($venta) && $venta->id)
                                    @if ($venta->id_estatus == 1)
                                        <a href="{{ route('venta-detalles.create', ['venta_id' => $venta->id]) }}" class="btn btn-success">
                                            Agregar artículo
                                        </a>
                                    @endif
                                    
                                @endif
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-2 mb20">
                                    <label for="total_unidades_lbl" class="form-label">{{ __('Total Unidades') }}</label>
                                    <input type="text" name="total_unidades_lbl" class="form-control @error('total_unidades') is-invalid @enderror" value="{{ old('total_unidades', $venta?->total_unidades) }}" id="total_unidades_lbl" placeholder="Total Unidades" readonly >

                                </div>
                                
                                <div class="form-group mb-2 mb20">
                                    <label for="total_iva_lbl" class="form-label">{{ __('Total Iva') }}</label>
                                    <input type="text" name="total_iva_lbl" class="form-control @error('total_iva') is-invalid @enderror" value="{{ old('total_iva', $venta?->total_iva) }}" id="total_iva_lbl" placeholder="Total Iva" readonly >
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <label for="subtotal_lbl" class="form-label">{{ __('Subtotal') }}</label>
                                    <input type="text" name="subtotal_lbl" class="form-control @error('subtotal') is-invalid @enderror" value="{{ old('subtotal', $venta?->subtotal) }}" id="subtotal_lbl" placeholder="Subtotal" readonly >
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <label for="total_lbl" class="form-label">{{ __('Total') }}</label>
                                    <input type="text" name="total_lbl" class="form-control @error('total') is-invalid @enderror" value="{{ old('total', $venta?->total) }}" id="total_lbl" placeholder="Total" readonly> 
                                
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
