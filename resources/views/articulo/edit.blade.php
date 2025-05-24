@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Articulo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card-black">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} Articulo</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('articulos.update', $articulo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('articulo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
