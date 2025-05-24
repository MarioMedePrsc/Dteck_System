@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Venta Detalle
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card-black">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Agregar') }} Artículo</span>
                        </div>
                        
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" 
                            href="{{ isset($venta->id) && !empty($venta->id) ? route('ventas.edit', ['venta' => $venta->id]) : url()->previous() }}">
                                {{ __('Back') }}
                            </a>
                        </div>


                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('venta-detalles.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('venta-detalle.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
