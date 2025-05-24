@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Articulo Tipo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card-black">
                    <div class="card-header">
                        <span class="card-title">{{ __('Nuevo') }} Tipo de Artículo</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('articulo-tipos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('articulo-tipo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
