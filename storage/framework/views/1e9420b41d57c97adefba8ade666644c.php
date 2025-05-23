<?php $__env->startSection('template_title'); ?>
    Articulo
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-black">
                    <div class="card-header ">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Lista de Articulos')); ?>

                            </span>

                             <div class="float-right">
                                <a href="<?php echo e(route('articulos.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Nuevo')); ?>

                                </a>
                              </div>
                        </div>
                    </div>
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success m-4">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Descripcion</th>
										<th>Id Tipo</th>
										<th>Id Iva</th>
										<th>Costo Unidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>
                                            
											<td><?php echo e($articulo->descripcion); ?></td>
											<td><?php echo e($articulo->id_tipo); ?></td>
											<td><?php echo e($articulo->id_iva); ?></td>
											<td><?php echo e($articulo->costo_unidad); ?></td>

                                            <td>
                                                <form action="<?php echo e(route('articulos.destroy',$articulo->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="<?php echo e(route('articulos.show',$articulo->id)); ?>"><i class="fa fa-fw fa-eye"></i> <?php echo e(__('Mostrar')); ?></a>
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('articulos.edit',$articulo->id)); ?>"><i class="fa fa-fw fa-edit"></i> <?php echo e(__('Editar')); ?></a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> <?php echo e(__('Borrar')); ?></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo $articulos->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\Dteck_System-main\resources\views/articulo/index.blade.php ENDPATH**/ ?>