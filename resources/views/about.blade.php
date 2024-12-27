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
</head>
<body>

	@extends('layouts.app')

	@section('title', 'Homepage')

	@section('content')
	
	<!-- GAMBAR -->
	<div class="position-relative d-flex justify-content-center align-items-center align-text-center">
		<img href="#" src="img/aboutussample.jpg" class="img-fluid" alt="AboutUs Large Image 1">
		<div class="overlay-darker position-absolute top-0 start-0 w-100 h-100"></div>
		
		<div class="position-absolute top-50 start-50 translate-middle text-white fs-1 text-center aboutheader" style="z-index: 2;">
			MILLENNIUM WORKS
			<p class="fs-3 overlaytxtsmall">From unique-minded people. For those who might share the same minds.</p>
			<p class="fs-3 overlaytxtsmaller">Founded in 2024.</p>
		</div>
		
		<div class="position-absolute bottom-0 text-white p-3 text-center contact-info contacts" style="z-index: 2;">
		<p class="mb-0">Email: contact@millenniumworks.com</p>
		<p class="mb-0">Phone: +6288888888 (WhatsApp preferred)</p>
	</div>
	</div>
    @endsection
	
</body>
</html>
