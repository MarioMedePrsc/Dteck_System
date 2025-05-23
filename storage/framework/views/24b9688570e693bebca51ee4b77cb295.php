<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</head>
<body class="bg-dark">
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: #1b1b1b;">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <img src="<?php echo e(asset('img/logoDteckChicoBlanco.png')); ?>" alt="Logo" style="height: 30px;" class="me-2">
                    <?php echo e(config('app.name', 'Laravel')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php if(!Request::is('login')): ?>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item dropdown">
                                <a id="opcionCatalogos" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Catálogos
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="opcionCatalogos">
                                    <a class="dropdown-item" href="<?php echo e(route('articulo-tipos.index')); ?>">
                                        <?php echo e(__('Tipos de Articulos')); ?>

                                    </a>
                                    <a class="dropdown-item" href="<?php echo e(route('catalogo-ivas.index')); ?>">
                                        <?php echo e(__('Catálogo de IVAs')); ?>

                                    </a>
                                    <a class="dropdown-item" href="<?php echo e(route('equipo-marcas.index')); ?>">
                                        <?php echo e(__('Marcas de Equipos')); ?>

                                    </a>
                                    <a class="dropdown-item" href="<?php echo e(route('equipo-tipos.index')); ?>">
                                        <?php echo e(__('Tipos de equipos')); ?>

                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('clientes.index')); ?>"><?php echo e(__('Clientes')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('articulos.index')); ?>">
                                        <?php echo e(__('Articulos')); ?>

                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="opcionServicios" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Servicios
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="opcionServicios">
                                    <a class="dropdown-item" href="<?php echo e(route('servicio-realizados.index')); ?>">
                                        <?php echo e(__('Servicios')); ?>

                                    </a>
                                    <a class="dropdown-item" href="<?php echo e(route('servicio-estatuses.index')); ?>">
                                        <?php echo e(__('Estatus de Servicios')); ?>

                                    </a>
                                    
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="opcionVentas" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Ventas
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="opcionVentas">
                                    <a class="dropdown-item" href="<?php echo e(route('servicio-realizados.index')); ?>">
                                        <?php echo e(__('Ventas')); ?>

                                    </a>
                                    <a class="dropdown-item" href="<?php echo e(route('servicio-estatuses.index')); ?>">
                                        <?php echo e(__('Estatus de Ventas')); ?>

                                    </a>
                                    
                                </div>
                            </li>

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            <?php if(auth()->guard()->guest()): ?>
                                <?php if(Route::has('login')): ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                    </li>
                                <?php endif; ?>

                                <?php if(Route::has('register')): ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php else: ?>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <?php echo e(Auth::user()->name); ?>

                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            <?php echo e(__('Cerrar Sesión')); ?>

                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </div>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\wamp64\Dteck_System-main\resources\views/layouts/app.blade.php ENDPATH**/ ?>