@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Equipo Marca
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-black">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Equipo Marca</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('equipo-marcas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('equipo-marca.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
