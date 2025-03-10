<?php $__env->startSection('content'); ?>
    <h1>"<?php echo e($vehicle->reg_plate); ?>" Jármű</h1>
    <div class="row">
        <div><?php echo e($vehicle->id); ?></div>
        <div><?php echo e($vehicle->reg_plate); ?></div>
    </div>
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_projekt\resources\views/vehicles/show.blade.php ENDPATH**/ ?>