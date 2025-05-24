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

                    @if ($serviciosPendientes->isEmpty())
                        <p class="text-muted">{{ __('Por el momento no hay ningún servicio pendiente') }}</p>
                    @else
                        <table class="table table-bordered mt-3">
                            <thead class="table-dark">
                                <tr>
                                    <th>Cliente</th>
                                    <th>Servicio</th>
                                    <th>Equipo</th>
                                    <th>Fecha Inicio</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($serviciosPendientes as $servicio)
                                    <tr>
                                        <td>{{ $servicio->ventaDetalle->venta->cliente->nombre ?? '-' }}</td>
                                        <td>{{ $servicio->ventaDetalle->articulo->descripcion ?? '-' }}</td>
                                        <td>{{ $servicio->ventaDetalle->equipo->descripcion ?? '-' }}</td>
                                        <td>{{ $servicio->fecha_inicio }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif

                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
