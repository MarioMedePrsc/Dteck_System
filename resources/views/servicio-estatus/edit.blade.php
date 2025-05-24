@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Servicio Estatus
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card-black">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} Estatus de Servicio</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('servicio-estatuses.update', $servicioEstatus->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('servicio-estatus.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
