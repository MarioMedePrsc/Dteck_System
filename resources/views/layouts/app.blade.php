<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-dark">
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: #1b1b1b;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logoDteckChicoBlanco.png') }}" alt="Logo" style="height: 30px;" class="me-2">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @if (!Request::is('login'))
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item dropdown">
                                <a id="opcionCatalogos" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Catálogos
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="opcionCatalogos">
                                    <a class="dropdown-item" href="{{ route('articulo-tipos.index') }}">
                                        {{ __('Tipos de Articulos') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('catalogo-ivas.index') }}">
                                        {{ __('Catálogo de IVAs') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('equipo-marcas.index') }}">
                                        {{ __('Marcas de Equipos') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('equipo-tipos.index') }}">
                                        {{ __('Tipos de equipos') }}
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('clientes.index') }}">{{ __('Clientes') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('articulos.index') }}">
                                        {{ __('Articulos') }}
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="opcionServicios" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Gestión de Servicios
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="opcionServicios">
                                    <a class="dropdown-item" href="{{ route('servicio-realizados.index') }}">
                                        {{ __('Servicios Registrados') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('servicio-estatuses.index') }}">
                                        {{ __('Estatus de Servicios') }}
                                    </a>
                                    
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="opcionVentas" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Ventas
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="opcionVentas">
                                    <a class="dropdown-item" href="{{ route('ventas.index') }}">
                                        {{ __('Ventas') }}
                                    </a>
                               
                                    <a class="dropdown-item" href="{{ route('venta-estatuses.index') }}">
                                        {{ __('Estatus de Ventas') }}
                                    </a>
                                    
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.index') }}">
                                        {{ __('Usuarios') }}
                                </a>
                            </li>

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Cerrar Sesión') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                @endif
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
