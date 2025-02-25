 
        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
 
   
<?php $__env->startSection('content'); ?>

<fieldset>
	<label for="makers_id">Gyártó</label>
		<select name="makers_id" id="select-makers" title="Gyártók">
			<option value="0">-- Válassz gyártót --</option>
			<?php $__currentLoopData = $makers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($maker->id); ?>"><?php echo e($maker->name); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</select>
</fieldset>
<fieldset>
	<label for="models_id">Model</label>
		<select name="models_id" id="select-model"  title="Modellek">
			<option value="0">-- Válassz modelt --</option>
			<?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($model->id); ?>"><?php echo e($model->name); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</select>
</fieldset>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_projekt\resources\views/vehicles/create.blade.php ENDPATH**/ ?>