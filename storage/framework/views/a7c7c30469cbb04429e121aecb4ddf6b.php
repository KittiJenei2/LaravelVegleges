

<?php $__env->startSection('content'); ?>
    <div>
        <?php echo $__env->make('error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <form action="<?php echo e(route('bodies.update', $body->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PATCH'); ?>
            <fieldset>
                <label for="name">Megnevezés</label>
                <input type="text" id="name" name="name" required value="<?php echo e(old('name', $body->name)); ?>">
            </fieldset>
            <button type="submit">Ment</button>
            <a href="<?php echo e(route('bodies.index')); ?>">Mégse</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_projekt\resources\views/bodies/edit.blade.php ENDPATH**/ ?>