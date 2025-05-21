@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class=" text-center mb-4">
            <img src="{{ asset('img/logoDeteckHorizontalBlanco.png') }}" alt="Logo" style="height: 100px;" >
        </div>
        <div class="col-md-8">

            <div class="card border-0 shadow">
                <div class="card-header text-white fs-4 fw-bold shadow" style="background-color: #1b1b1b;">{{ __('Servicios Pendientes') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Por el momento no hay ningún servicio pendiente') }}
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
