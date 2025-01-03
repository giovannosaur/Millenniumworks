<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MILLENNIUMWORKS.')</title>
    <!-- CDN Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href=" {{ asset('css/base.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/productgrid.css') }}">
	<!-- Font Poppins dari Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<!-- Font Manrope dari Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
</head>
<body>
    @include('partials.navbar')

    <main class="container-fluid">
        @yield('content')
    </main>
    
    <footer class="text-light mt-5 py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5 class="mb-3">MILLENNIUMWORKS.</h5>
                    <p>Your trusted source for premium fashion and lifestyle products.</p>
                    <p>© 2024 MILLENNIUMWORKS. All rights reserved.</p>
                </div>
                
                <div class="col-md-4 mb-3">
                    <h5 class="mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('about') }}" class="text-light text-decoration-none">About Us</a></li>
                        <li><a href="{{ route('contact') }}" class="text-light text-decoration-none">Contact</a></li>
                        <li><a href="{{ route('shop.index') }}" class="text-light text-decoration-none">Shop</a></li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <h5 class="mb-3">Contact Us</h5>
                    <ul class="list-unstyled">
                        <li>Email: info@millenniumworks.com</li>
                        <li>Phone: +62 123 456 789</li>
                        <li>Address: Jakarta, Indonesia</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
	<script src="{{ asset('js/navsearch.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
