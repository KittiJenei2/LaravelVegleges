<!DOCTYPE html>
<html lang="hu">
    <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Autók</title>
        <!-- Scripts -->
        <script src="<?php echo e(asset('js/cars.js')); ?>" defer></script>
        <script src="<?php echo e(asset('js/jquery-3.7.1.js')); ?>"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(asset('css/car.css')); ?>">
        <!--<link rel="stylesheet" type="text/css" href="<?php echo e(asset('fontawesome/css/all.css')); ?>" >
        <link rel="shortcut icon" href="<?php echo e(asset('favicon.png')); ?>" type="image/x-icon">-->
</head>
<body>
    <header>
        <div>
            <nav>
                <ul>
                    <li><a href="<?php echo e(route('makers.index')); ?>">Gyártók</a></li>
                    <li><a href="<?php echo e(route('bodies.index')); ?>">Karosszériák</a></li>
                    <li><a href="<?php echo e(route('models.index')); ?>">Modellek</a></li>
                    <li><a href="<?php echo e(route('vehicles.index')); ?>">Járművek</a></li>
                </ul>
            </nav>
        </div>
    </header>
<main>
       <?php echo $__env->yieldContent('content'); ?>
</main>
<footer>
<p>&copy; 2025 Jenei Kitti</p>
</footer>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel_projekt\resources\views/layout.blade.php ENDPATH**/ ?>