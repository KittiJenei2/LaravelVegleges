

<?php $__env->startSection('content'); ?>
    <h1>"<?php echo e($maker->name); ?>" karosszéria</h1>
    <div class="row">
        <div><?php echo e($maker->id); ?></div>
        <div><?php echo e($maker->name); ?></div>
    </div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_projekt\resources\views/makers/show.blade.php ENDPATH**/ ?>