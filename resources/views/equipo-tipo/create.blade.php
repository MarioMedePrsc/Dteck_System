@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Equipo Tipo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card-black">
                    <div class="card-header">
                        <span class="card-title">{{ __('Nuevo') }} Tipo de Equipo</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('equipo-tipos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('equipo-tipo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
