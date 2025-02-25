

<?php $__env->startSection('content'); ?>
    <div>
        <?php echo $__env->make('error', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <form action="<?php echo e(route('makers.update', $maker->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PATCH'); ?>
            <fieldset>
                <label for="name">Megnevezés</label>
                <input type="text" id="name" name="name" required value="<?php echo e(old('name', $maker->name)); ?>">
            </fieldset>
            <button type="submit">Ment</button>
            <a href="<?php echo e(route('makers.index')); ?>">Mégse</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_projekt\resources\views/makers/edit.blade.php ENDPATH**/ ?>