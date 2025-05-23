<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label"><?php echo e(__('Descripcion')); ?></label>
            <input type="text" name="descripcion" class="form-control <?php $__errorArgs = ['descripcion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('descripcion', $articulo?->descripcion)); ?>" id="descripcion" placeholder="Descripcion">
            <?php echo $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_tipo" class="form-label"><?php echo e(__('Id Tipo')); ?></label>
            <input type="text" name="id_tipo" class="form-control <?php $__errorArgs = ['id_tipo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('id_tipo', $articulo?->id_tipo)); ?>" id="id_tipo" placeholder="Id Tipo">
            <?php echo $errors->first('id_tipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_iva" class="form-label"><?php echo e(__('Id Iva')); ?></label>
            <input type="text" name="id_iva" class="form-control <?php $__errorArgs = ['id_iva'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('id_iva', $articulo?->id_iva)); ?>" id="id_iva" placeholder="Id Iva">
            <?php echo $errors->first('id_iva', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

        </div>
        <div class="form-group mb-2 mb20">
            <label for="costo_unidad" class="form-label"><?php echo e(__('Costo Unidad')); ?></label>
            <input type="text" name="costo_unidad" class="form-control <?php $__errorArgs = ['costo_unidad'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('costo_unidad', $articulo?->costo_unidad)); ?>" id="costo_unidad" placeholder="Costo Unidad">
            <?php echo $errors->first('costo_unidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Subir')); ?></button>
    </div>
</div><?php /**PATH C:\wamp64\Dteck_System-main\resources\views/articulo/form.blade.php ENDPATH**/ ?>