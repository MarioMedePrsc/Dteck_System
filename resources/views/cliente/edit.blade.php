@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Cliente
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card-black">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Actualizar') }} Cliente</span>
                        </div>
                        
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" 
                            href="{{ route('clientes.index')}}">
                                {{ __('Back') }}
                            </a>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        
                        <form method="POST" action="{{ route('clientes.update', $cliente->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('cliente.form')

                        </form>
                        <hr/>
                        <div>
                            <span class="fw-bold fs-4">Lista de Equipos del cliente</span>
                        </div>


                        <div class="col-md-8">
                            @if (isset($cliente) && $cliente->id)
                                <a href="{{ route('equipos.create', ['id_cliente' => $cliente->id]) }}" class="btn btn-success">
                                    Agregar Equipo
                                </a>
                                
                            @endif
                            @include('cliente._lista', ['cliente' => $cliente])
                            
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
