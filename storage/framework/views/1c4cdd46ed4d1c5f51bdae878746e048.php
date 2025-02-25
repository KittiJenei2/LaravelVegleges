

<?php $__env->startSection('content'); ?>
<h1 class="title">Gyártók</h1>
<div>
    <?php echo $__env->make('success', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <a href="<?php echo e(route('makers.create')); ?>">
        <button class="btn btn-success new-btn"><i class="fa fa-plus" title="Új"></i> Új</button>
    </a>
</div>

<table class="custom-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Név</th>
            <th>Műveletek</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $makers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($maker->id); ?></td>
                <td><?php echo e($maker->name); ?></td>
                <td class="actions">
    <a href="<?php echo e(route('makers.show', $maker->id)); ?>" class="btn btn-info action-btn">
        <i class="fa fa-binoculars" title="Mutat"></i> Mutat
    </a>
    <a href="<?php echo e(route('makers.edit', $maker->id)); ?>" class="btn btn-warning action-btn">
        <i class="fa fa-edit edit" title="Módosít"></i> Módosít
    </a>
    <form action="<?php echo e(route('makers.destroy', $maker->id)); ?>" method="POST" class="inline-form">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-danger action-btn" name="btn-del-fuel">
            <i class="fa fa-trash-can trash" title="Töröl"></i> Töröl
        </button>
    </form>
</td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_projekt\resources\views/makers/index.blade.php ENDPATH**/ ?>