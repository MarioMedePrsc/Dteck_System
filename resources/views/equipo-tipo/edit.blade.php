@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Equipo Tipo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-black">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} Equipo Tipo</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('equipo-tipos.update', $equipoTipo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('equipo-tipo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
