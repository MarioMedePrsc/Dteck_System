@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Articulo Tipo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-black">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} tipo de articulo</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('articulo-tipos.update', $articuloTipo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('articulo-tipo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
