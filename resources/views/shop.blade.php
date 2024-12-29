<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products</title>
</head>
<body>

    @extends('layouts.app')

    @section('title', 'Homepage')

    @section('content')
	
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
    @foreach ($products as $product)
        <div class="col-sm-6 col-md-4 col-lg-3 product-card" data-category="{{ $product->category }}">
            <div class="card">
                <a href="{{ url('product/' . $product->id) }}">
                    <img class="card-img-top" src="{{ $product->image }}" alt="{{ $product->name }}">
                </a>
                <div class="card-body">
                    <a href="{{ url('product/' . $product->id) }}" class="text-decoration-none">
                        <h5 class="card-title">{{ $product->name }}</h5>
                    </a>
                    <h5 class="card-title">IDR{{ $product->price }}</h5>
                    <p class="card-text">{{ $product->category }}</p>
                    <p class="card-text">Stock: {{ $product->stock }}</p>
                </div>
            </div>
        </div>
    @endforeach
    </div>


    @endsection

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
