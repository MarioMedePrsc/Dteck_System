@extends('layouts.app')

@section('template_title')
    {{ $equipo->name ?? __('Show') . " " . __('Equipo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Equipo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('equipos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Id Cliente:</strong>
                            {{ $equipo->id_cliente ?? '' }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Tipo:</strong>
                            {{ $equipo->id_tipo ?? ''}}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Marca:</strong>
                            {{ $equipo->id_marca ?? ''}}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Modelo:</strong>
                            {{ $equipo->modelo ?? '' }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Numero Serie:</strong>
                            {{ $equipo->numero_serie ?? ''}}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Descripcion:</strong>
                            {{ $equipo->descripcion ?? ''}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
