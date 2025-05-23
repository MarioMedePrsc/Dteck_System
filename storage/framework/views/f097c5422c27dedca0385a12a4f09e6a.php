<?php $__env->startSection('template_title'); ?>
    <?php echo e(__('Create')); ?> Equipo Tipo
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-black">
                    <div class="card-header">
                        <span class="card-title"><?php echo e(__('Crear')); ?> Equipo Tipo</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="<?php echo e(route('equipo-tipos.store')); ?>"  role="form" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <?php echo $__env->make('equipo-tipo.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\Dteck_System-main\resources\views/equipo-tipo/create.blade.php ENDPATH**/ ?>