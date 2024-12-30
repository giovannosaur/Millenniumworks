<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MILLENNIUMWORKS.</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background: linear-gradient(135deg, #1a1a1a 0%, #363636 100%);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            color: #ffffff !important;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .nav-link {
            color: #e0e0e0 !important;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #ffffff !important;
            text-shadow: 0 0 10px rgba(255,255,255,0.5);
        }

        .carousel-item {
            height: 900px;
        }

        .carousel-item img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }

        .overlay-dark {
            background: rgba(0, 0, 0, 0.4);
        }

        .overlaytxt {
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .overlaytxtsmall {
            font-weight: 300;
        }

        footer {
            background: linear-gradient(135deg, #1a1a1a 0%, #363636 100%);
        }

        footer a:hover {
            color: #ffffff !important;
            text-decoration: underline !important;
        }

        footer li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <!-- Carousel -->
    <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/indeks.png') }}" class="d-block w-100" alt="Slide 1">
                <div class="overlay-dark position-absolute top-0 start-0 w-100 h-100"></div>
                <div class="carousel-caption text-white fs-1 overlaytxt">
                    October Edition
                    <div class="fs-3 overlaytxtsmall">New Releases Available.</div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn0-production-images-kly.akamaized.net/Qbomh3zIcxXiIXjPD5xzp3LBb6A=/1200x900/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4592846/original/021684600_1695986154-shutterstock_1488093779.jpg" class="d-block w-100" alt="Slide 2">
                <div class="overlay-dark position-absolute top-0 start-0 w-100 h-100"></div>
                <div class="carousel-caption text-white fs-1 overlaytxt">
                    Featured Collection
                    <div class="fs-3 overlaytxtsmall">Explore Our Latest Designs</div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://media.gq.com/photos/62ec1b33f983598b622ed644/16:9/w_2560%2Cc_limit/FA22_116_H_Digital.jpg" class="d-block w-100" alt="Slide 3">
                <div class="overlay-dark position-absolute top-0 start-0 w-100 h-100"></div>
                <div class="carousel-caption text-white fs-1 overlaytxt">
                    Special Offers
                    <div class="fs-3 overlaytxtsmall">Limited Time Deals</div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- KATALOG -->
    <div class="container-fluid my-4">
        <div class="row row-cols-2 row-cols-md-4 g-3">
            <!-- Content Katalog -->
        </div>
    </div>

    <!-- Footer -->
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new bootstrap.Carousel(document.querySelector('#homeCarousel'), {
            interval: 5000,
            wrap: true,
            ride: 'carousel'
        });
    });
</script>

</body>
</html>