<?php $__env->startSection('content'); ?>
    <div>
        <?php echo $__env->make('error', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <form action="<?php echo e(route('vehicles.update', $vehicle->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PATCH'); ?>

            <fieldset>
                <label for="makers_id">Gyártó</label>
                <select id="makers_id" name="makers_id" required>
                    <?php $__currentLoopData = $makers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($maker->id); ?>" <?php echo e($vehicle->makers_id == $maker->id ? 'selected' : ''); ?>>
                            <?php echo e($maker->name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </fieldset>

            <fieldset>
                <label for="models_id">Modell</label>
                <select id="models_id" name="models_id" required>
                    <?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($model->id); ?>" <?php echo e($vehicle->models_id == $model->id ? 'selected' : ''); ?>>
                            <?php echo e($model->name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </fieldset>

            <fieldset>
                <label for="bodies_id">Karosszéria</label>
                <select id="bodies_id" name="bodies_id" required>
                    <?php $__currentLoopData = $bodies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $body): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($body->id); ?>" <?php echo e($vehicle->bodies_id == $body->id ? 'selected' : ''); ?>>
                            <?php echo e($body->name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </fieldset>

            <fieldset>
                <label for="reg_plate">Rendszám</label>
                <input type="text" id="reg_plate" name="reg_plate" required value="<?php echo e(old('reg_plate', $vehicle->reg_plate)); ?>">
            </fieldset>

            <fieldset>
                <label for="vin">Alvázszám</label>
                <input type="text" id="vin" name="vin" required value="<?php echo e(old('vin', $vehicle->vin)); ?>">
            </fieldset>

            <button type="submit">Ment</button>
            <a href="<?php echo e(route('vehicles.index')); ?>">Mégse</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_projekt\resources\views/vehicles/edit.blade.php ENDPATH**/ ?>