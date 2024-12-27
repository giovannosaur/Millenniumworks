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
            <button id="tombollongsleeves" class="btn btn-secondary" onclick="filterByCategory('longsleeves')">Longsleeves</button>
            <button id="tombolhoodie" class="btn btn-secondary" onclick="filterByCategory('hoodie')">Hoodie</button>
			<button id="tombolknitwear" class="btn btn-secondary" onclick="filterByCategory('knitwear')">Knitwear</button>
            <button id="tombolaccessories" class="btn btn-secondary" onclick="filterByCategory('accessories')">Accessories</button>
        </div>
		<div class="col-md-4">
            <input type="text" id="searchInput" class="form-control" placeholder="Search for products..." onkeyup="filterProducts()">
        </div>
    </div>

    <!-- Product Grid -->
    <div class="row" id="productContainer">
        <!-- Product cards-->
        <div class="col-sm-6 col-md-4 col-lg-3 product-card" data-category="longsleeves">
            <div id="ll" class="card">
                <a href="DetailProduk.html">
                <img class="card-img-top" src="img/products/Longsleeve.jpeg" alt="Product 1">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Longsleeve Halerido</h5>
                    <p class="card-text">Longsleeves</p>
                </div>
            </div>
        </div>
        
        <div class="col-sm-6 col-md-4 col-lg-3 product-card" data-category="hoodie">
            <div id="hdga" class="card">
                <a href="DetailProduk.html">
                <img class="card-img-top" src="img/products/HoodieGacor.jpeg" alt="Product 2">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Hoodie Skena</h5>
                    <p class="card-text">Hoodie</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 product-card" data-category="accessories">
            <div id="accso" class="card">
                <a href="DetailProduk.html">
                <img class="card-img-top" src="img/products/Chain.jpeg" alt="Product 3">
                </a>
                <div class="card-body">
                    <h5 class="card-title">MILLENNIUM Chain</h5>
                    <p class="card-text">Accessories</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 product-card" data-category="hoodie">
            <div id="hdo" class="card">
                <a href="DetailProduk.html">
                <img class="card-img-top" src="img/products/OversizedHoodie.jpeg" alt="Product 4">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Oversized Hoodie</h5>
                    <p class="card-text">Hoodie</p>
                </div>
            </div>
        </div>
		
		<div class="col-sm-6 col-md-4 col-lg-3 product-card" data-category="knitwear">
            <div id="kw" class="card">
                <a href="DetailProduk.html">
                <img class="card-img-top" src="img/products/Knitwear.jpeg" alt="Product 4">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Knitted Sweater</h5>
                    <p class="card-text">Knitwear</p>
                </div>
            </div>
        </div>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROGRAMMING\Web Programming\TUGAS BESAR WEBAPP\Millenniumworks\resources\views/products.blade.php ENDPATH**/ ?>