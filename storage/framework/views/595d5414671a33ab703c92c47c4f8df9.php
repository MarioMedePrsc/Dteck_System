<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="tasa_iva" class="form-label"><?php echo e(__('Tasa Iva')); ?></label>
            <input type="text" name="tasa_iva" class="form-control <?php $__errorArgs = ['tasa_iva'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('tasa_iva', $catalogoIva?->tasa_iva)); ?>" id="tasa_iva" placeholder="Tasa Iva">
            <?php echo $errors->first('tasa_iva', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Enviar')); ?></button>
    </div>
</div><?php /**PATH C:\wamp64\Dteck_System-main\resources\views/catalogo-iva/form.blade.php ENDPATH**/ ?>