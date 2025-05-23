@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Equipo Marca
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card-black">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} Marca de Equipo</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('equipo-marcas.update', $equipoMarca->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('equipo-marca.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
