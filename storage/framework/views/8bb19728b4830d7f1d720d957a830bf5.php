<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class=" text-center mb-4">
            <img src="<?php echo e(asset('img/logoDeteckHorizontalBlanco.png')); ?>" alt="Logo" style="height: 100px;" >
        </div>
        <div class="col-md-8">

            <div class="card border-0 shadow">
                <div class="card-header text-white fs-4 fw-bold shadow" style="background-color: #1b1b1b;"><?php echo e(__('Servicios Pendientes')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('Por el momento no hay ningún servicio pendiente')); ?>

                </div>
            </div>
        </div>
        
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\Dteck_System-main\resources\views/home.blade.php ENDPATH**/ ?>