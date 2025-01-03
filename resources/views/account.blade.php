<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
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
            font-family: "Poppins", sans-serif;
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
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 40px 20px;
        }
        .item {
            width: 45%;
            margin-bottom: 40px;
        }
        .item h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .item p {
            font-size: 16px;
            margin: 5px 0;
        }
        .item a {
            color: blue;
            text-decoration: none;
            font-size: 16px;
        }
        @media (max-width: 768px) {
            .item {
                width: 100%;
            }
        }
    </style>
</head>
<body>

	@extends('layouts.app')

	@section('title', 'Homepage')

	@section('content')
	
    <!-- <div class="container-fluid">
	    <h1>Welcome,</h1>
		<div class="namauser">
			<h1>namauser</h1>
		</div>
    </div>
    <div class="container-fluid">
        <h>Congrats, you are logged in</h2>
    </div> -->

	
	<div class="navbarakun">
		<div class="first">
			<a href="#" class="active">Personal details</a>
		</div>
		<div class="second">
			<a href="{{route('orderHistory')}}">Order history</a>
		</div>
    </div>
	<center>
    <div class="container row">
        <img src="https://static.vecteezy.com/system/resources/thumbnails/009/734/564/small_2x/default-avatar-profile-icon-of-social-media-user-vector.jpg" style="width: 240px; height: 200px;">
        <div class="item">
            <h2>Email Address</h2>
            <p>{{ Auth::user()->email }}</p>
        </div>
        <div class="item">
            <h2>Username</h2> 
            <p>{{ Auth::user()->name }}</p>
        </div>
    </div>
	</center>
	
    @endsection
	
</body>
</html>