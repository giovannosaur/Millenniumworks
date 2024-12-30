<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
	<!-- CDN Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/base.css">
	<!-- Font Poppins dari Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<!-- Font Manrope dari Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
	<!-- Font Kanit dari Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
            color: black;
        }
        .navbarakun {
            display: flex;
            justify-content: center;
            padding: 20px;
            background-color: white;
            border-bottom: 1px solid #ddd;
        }
        .navbarakun a {
            margin: 0 15px;
            text-decoration: none;
            color: black;
            font-size: 16px;
			padding: 200px;
        }
        .navbarakun a.active {
            color: #ff4500;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
            padding: 10px 0;
        }
        .table-header div {
            flex: 1;
            text-align: center;
            font-size: 14px;
            color: #333;
        }
        .table-header div:first-child {
            text-align: left;
        }
        .table-header div:last-child {
            text-align: right;
        }
    </style>
</head>
<body>

	@extends('layouts.app')

	@section('title', 'Homepage')

	
    @section('content')
    <div class="navbarakun">
        <div class="first">
            <a href="{{route('account')}}">Personal details</a>
        </div>
        <div class="second">
            <a href="#" class="active">Order history</a>
        </div>
    </div>

    <div class="container">
    <div class="table-header">
        <div>Date</div>
        <div>ID</div>
        <div>Products</div>
        <div>Total/Invoice</div>
    </div>
    
    @foreach($orders as $order)
    <div class="order-row" style="display: flex; justify-content: space-between; padding: 15px 0; border-bottom: 1px solid #e0e0e0;">
        <div>{{ $order->created_at->format('d/m/Y') }}</div>
        <div>#{{ $order->id }}</div>
        <div>
            @foreach($order->items as $item)
                <a href="{{ route('product.details', $item->product->id) }}" 
                   style="text-decoration: none; color: #0066cc; display: block; margin-bottom: 5px;">
                    {{ $item->product->name }} (x{{ $item->quantity }})
                </a>
            @endforeach
        </div>
        <div>IDR {{ number_format($order->total_amount, 0, ',', '.') }}</div>
    </div>
    @endforeach
    </div>
    @endsection
	
</body>
</html>