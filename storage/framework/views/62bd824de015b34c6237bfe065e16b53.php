<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MILLENNIUMWORKS.</title>
	<style>
    </style>
</head>
<body>

	

	<?php $__env->startSection('title', 'Homepage'); ?>

	<?php $__env->startSection('content'); ?>
		<!-- GAMBAR -->
		<div class="position-relative d-flex justify-content-center align-items-center align-text-center">
			<img href="#" src="<?php echo e(asset('img/indeks.png')); ?>" class="img-fluid" alt="Homepage Large Image 1">
			<div class="overlay-dark position-absolute top-0 start-0 w-100 h-100"></div>
			<div class="position-absolute top-50 start-50 translate-middle text-white fs-1 overlaytxt" style="z-index: 2;">
				October Edition
				<div class="fs-3 overlaytxtsmall">New Releases Available.</div>
			</div>
		</div>

		<!-- KATALOG -->
		<div class="container-fluid my-4">
			<div class="row row-cols-2 row-cols-md-4 g-3">
				<!-- Content Katalog -->
			</div>
		</div>
	<?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROGRAMMING\Web Programming\TUGAS BESAR WEBAPP\Millenniumworks\resources\views/index.blade.php ENDPATH**/ ?>