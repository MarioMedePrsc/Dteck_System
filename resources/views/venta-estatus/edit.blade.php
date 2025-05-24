@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Venta Estatus
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card-black">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} Estatus de Venta</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('venta-estatuses.update', $ventaEstatus->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('venta-estatus.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
