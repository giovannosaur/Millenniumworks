<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist - MILLENNIUMWORKS.</title>
	<!-- CDN Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/base.css">
	<!-- Font Poppins dari Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
	<!-- Font Manrope dari Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
</head>
<body>

    

    <?php $__env->startSection('title', 'Homepage'); ?>

    <?php $__env->startSection('content'); ?>
	
	<!-- Wishlist Section -->
	<div class="container my-4">
		<h2 class="text-center">Your Wishlist</h2>
        <div class="row row-cols-2 row-cols-md-4 g-3">
            <div class="col">
                <div class="position-relative text-center text-white overflow-hidden">
                    <a href="product-details.html"><img src="img/croptop.png" class="w-100" alt="Wishlist item"></a>
                    <div class="position-absolute bottom-0 w-100 bg-dark bg-opacity-50 py-2 fs-5" style="z-index: 2;">
                        <span>Crop Top</span>
                        <a href="#" class="text-danger float-end me-2" aria-label="Remove from Wishlist"><i class="bi bi-trash"></i></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="position-relative text-center text-white overflow-hidden">
                    <a href="product-details.html"><img src="img/hoodie.jpg" class="w-100" alt="Wishlist item"></a>
                    <div class="position-absolute bottom-0 w-100 bg-dark bg-opacity-50 py-2 fs-5" style="z-index: 2;">
                        <span>Hoodie</span>
                        <a href="#" class="text-danger float-end me-2" aria-label="Remove from Wishlist"><i class="bi bi-trash"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROGRAMMING\Web Programming\TUGAS BESAR WEBAPP\Millenniumworks\resources\views/wishlist.blade.php ENDPATH**/ ?>