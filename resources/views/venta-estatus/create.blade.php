@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Venta Estatus
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card-black">
                    <div class="card-header">
                        <span class="card-title">{{ __('Agregar') }} Estatus de Venta</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('venta-estatuses.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('venta-estatus.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
