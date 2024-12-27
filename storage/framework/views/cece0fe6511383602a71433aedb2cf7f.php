<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products</title>
</head>
<body>

    

    <?php $__env->startSection('title', 'Homepage'); ?>

    <?php $__env->startSection('content'); ?>
	
	<!-- Search bar + Filter -->
     <div class="row mb-3 card-text">
        <div class="col">
            <button id="tombolall" class="btn btn-primary" onclick="filterByCategory('all')">All</button>
            <button id="tombollongsleeves" class="btn btn-secondary" onclick="filterByCategory('Longsleeves')">Longsleeves</button>
            <button id="tombolhoodie" class="btn btn-secondary" onclick="filterByCategory('Hoodie')">Hoodie</button>
			<button id="tombolknitwear" class="btn btn-secondary" onclick="filterByCategory('Knitwear')">Knitwear</button>
            <button id="tombolaccessories" class="btn btn-secondary" onclick="filterByCategory('Accessories')">Accessories</button>
        </div>
		<div class="col-md-4">
            <input type="text" id="searchInput" class="form-control" placeholder="Search for products..." onkeyup="filterProducts()">
        </div>
    </div>

    <!-- Product Grid -->
    <div class="row" id="productContainer">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-6 col-md-4 col-lg-3 product-card" data-category="<?php echo e($product->category); ?>">
            <div class="card">
                <a href="<?php echo e(url('product/' . $product->id)); ?>">
                    <img class="card-img-top" src="<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>">
                </a>
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($product->name); ?></h5>
                    <h5 class="card-title">IDR<?php echo e($product->price); ?></h5>
                    <p class="card-text"><?php echo e($product->category); ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


    <?php $__env->stopSection(); ?>

    <script>
        $(document).ready(function() {
            $("#tombolall").click(function() {
                $("#ll").show();
                $("#hdga").show();
                $("#accso").show();
                $("#hdo").show();
                $("#kw").show();
            });
            $("#tombollongsleeves").click(function() {
                $("#ll").show();
                $("#hdga").hide();
                $("#accso").hide();
                $("#hdo").hide();
                $("#kw").hide();
            });
            $("#tombolhoodie").click(function() {
                $("#ll").hide();
                $("#hdga").show();
                $("#accso").hide();
                $("#hdo").show();
                $("#kw").hide();
            });
            $("#tombolknitwear").click(function() {
                $("#ll").hide();
                $("#hdga").hide();
                $("#accso").hide();
                $("#hdo").hide();
                $("#kw").show();
            });
            $("#tombolaccessories").click(function() {
                $("#ll").hide();
                $("#hdga").hide();
                $("#accso").show();
                $("#hdo").hide();
                $("#kw").hide();
            });
        });
    </script>
    
	<script src="js/products.js"></script>
</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROGRAMMING\Web Programming\TUGAS BESAR WEBAPP\Millenniumworks\resources\views/shop.blade.php ENDPATH**/ ?>