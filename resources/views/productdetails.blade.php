<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MILLENNIUMWORKS.</title>
    <!-- CDN Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="js/navsearch.js">
    <!-- Font Poppins dari Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Font Manrope dari Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <style>
        .detail{
            font-family: 'Poppins';
            font-weight: 400;
        }

        .container{
            padding-top: 50px;
        }

        .text-center{
            margin-top: 50px;
        }

        .product-details {
            margin-left: 20px;
            max-width: 300px;
        }

        .product-title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .product-type {
            color: #666;
            font-size: 14px;
            margin-top: 4px;
        }

        .price {
            font-size: 24px;
            color: #000;
            margin: 10px 0;
        }

        .color-selection {
            display: flex;
            gap: 10px;
            margin: 15px 0;
        }

        .color-option {
            width: 50px;
            height: 50px;
            border: 2px solid transparent;
            border-radius: 50%;
            cursor: pointer;
        }

        .color-option.selected {
            border-color: #000;
        }

        .size-selection {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            margin-bottom: 20px;
        }

        .size-option {
            padding: 10px 0;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 4px;
            cursor: pointer;
            color: #333;
        }

        .size-option.disabled {
            color: #999;
            cursor: not-allowed;
            border-color: #eee;
        }

        .size-option:hover:not(.disabled) {
            background-color: #f0f0f0;
        }

        .add-to-bag {
            width: 100%;
            padding: 15px;
            background-color: #000;
            color: #fff;
            text-align: center;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        }

        .wishlist-btn {
            width: 100%;
            padding: 15px;
            background-color: white;
            color: #000;
            text-align: center;
            border: 2px solid #000;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            transition: all 0.3s ease;
        }

        .wishlist-btn:hover {
            background-color: #000;
            color: white;
        }

        .alert {
            margin-top: 10px;
            padding: 10px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

    @extends('layouts.app')

    @section('title', 'Homepage')

    @section('content')

    <div class="container detail">
        <div class="row">
            <div class="col">
                <img src="{{ $product->image }}" alt="{{ $product->name }}" width="500px">
            </div>
            <div class="col">
                <div class="deskripsi">
                    <div class="product-details">
                        <div class="product-title">{{ $product->name }}</div>
                        <div class="product-type">{{ $product->category }}</div>
                        <div class="price">Rp {{ number_format($product->price, 0, ',', '.') }}</div><br/>

                        <!-- Add to Cart -->
                        <form action="{{ route('cart.add', $product->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="add-to-bag">Add to Cart</button>
                        </form>

                        <!-- Add to Wishlist -->
                        <form action="{{ route('wishlist.store', $product->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="wishlist-btn">
                                <i class="bi bi-heart"></i> Add to Wishlist
                            </button>
                        </form>

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
    <script src="js/navsearch.js"></script>
</body>
</html>