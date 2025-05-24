@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Equipo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card-black">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Agregar') }} Equipo</span>
                        </div>
                        
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" 
                            href="{{ isset($ventaId) && !empty($ventaId) ? route('venta-detalles.create', ['venta_id' => $ventaId]) : url()->previous() }}">
                                {{ __('Back') }}
                            </a>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('equipos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('equipo.formFromVenta')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
