@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center ">
        
        <div class="col-md-8 ">
            
            <div class=" text-center mb-4">
                <img src="{{ asset('img/logoDeteckHorizontalBlanco.png') }}" alt="Logo" style="height: 100px;" >
            </div>

            <div class="card border-0 shadow">
                <div class="card-header text-white fs-4 fw-bold shadow" style="background-color: #2c2c2c;"  >{{ __('Iniciar Sesión') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3 mx-2">
                            <label for="email" class="col-md-4 col-form-label">{{ __('Correo Electrónico') }}</label>

                            <div class="w-100">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 mx-2">
                            <label for="password" class="col-md-4 col-form-label ">{{ __('Contraseña:') }}</label>

                            <div class="w-100">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 mx-2">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recuerdame') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mx-2">
                            <div >
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('Iniciar Sesión') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
