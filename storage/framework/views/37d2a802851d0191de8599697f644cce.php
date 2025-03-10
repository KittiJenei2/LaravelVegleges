<?php $__env->startSection('content'); ?>
<h1 class="title">Járművek</h1>
<div>
    <?php echo $__env->make('success', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <a href="<?php echo e(route('vehicles.create')); ?>">
        <button class="btn btn-success new-btn"><i class="fa fa-plus" title="Új"></i> Új</button>
    </a>
</div>

<table class="custom-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Alvázszám</th>
            <th>Rendszám</th>
            <th>Gyártó</th>
            <th>Karosszéria</th>
            <th>Modell</th>
            <th>Műveletek</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($vehicle->id); ?></td>
                <td><?php echo e($vehicle->vin); ?></td>
                <td><?php echo e($vehicle->reg_plate); ?></td>
                <td><?php echo e($vehicle->maker->name ?? 'Nincs adat'); ?></td>
                <td><?php echo e($vehicle->model->name ?? 'N/A'); ?></td>
                <td><?php echo e($vehicle->body->name ?? 'N/A'); ?></td>

                <td class="actions">
    <a href="<?php echo e(route('vehicles.show', $vehicle->maker->id ?? 0)); ?>" class="btn btn-info action-btn">
        <i class="fa fa-binoculars" title="Mutat"></i> Mutat
    </a>
    <a href="<?php echo e(route('vehicles.edit', $vehicle->maker->id ?? 0)); ?>" class="btn btn-warning action-btn">
        <i class="fa fa-edit edit" title="Módosít"></i> Módosít
    </a>
    <form action="<?php echo e(route('vehicles.destroy', $vehicle->id)); ?>" method="POST" class="inline-form">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button type="submit" class="btn btn-danger action-btn">
        <i class="fa fa-trash-can trash" title="Töröl"></i> Töröl
    </button>
</form>

</td>

            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_projekt\resources\views/vehicles/index.blade.php ENDPATH**/ ?>