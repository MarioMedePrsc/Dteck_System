<?php $__env->startSection('template_title'); ?>
    <?php echo e(__('Update')); ?> Catalogo Iva
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-black">
                    <div class="card-header">
                        <span class="card-title"><?php echo e(__('Actualizar')); ?> IVA</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="<?php echo e(route('catalogo-ivas.update', $catalogoIva->id)); ?>"  role="form" enctype="multipart/form-data">
                            <?php echo e(method_field('PATCH')); ?>

                            <?php echo csrf_field(); ?>

                            <?php echo $__env->make('catalogo-iva.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\Dteck_System-main\resources\views/catalogo-iva/edit.blade.php ENDPATH**/ ?>