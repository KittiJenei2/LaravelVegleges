
 
        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
 
   
<?php $__env->startSection('content'); ?>
<h1>Új gyártó</h1>
<div>
   
   <?php echo $__env->make('error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <form action="<?php echo e(route('makers.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <fieldset>
            <label for="name">Megnevezés</label>
            <input type="text" id="name" name="name">
            <label for="logo">Logo</label>
            <!--<input type="text" id="logo" name="logo">-->
        </fieldset>
        <button type="submit">Ment</button>
        <a href="<?php echo e(route('makers.index')); ?>">Mégse</a>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_projekt\resources\views/makers/create.blade.php ENDPATH**/ ?>