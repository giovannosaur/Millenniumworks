<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin - MILLENNIUMWORKS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Poppins', sans-serif;
        }
        .container {
            margin-top: 5%;
        }
        .table-container {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Welcome back, Admin!</h1>
    <h2 class="text-center">Have a great day.</h2>
</div>
<div class="container table-container display-flex">
    <div class="row justify-content-center">
        <div class="col-sm-6 col-md-4 col-lg-3 product-card" data-category="longsleeves">
            <div id="ll" class="card">
                <a href="{{ route('users.index') }}">
                    <img class="card-img-top" src="https://cdn-icons-png.flaticon.com/512/3276/3276535.png" alt="Product 1">
                </a>
                <div class="card-body">
                    <h5 class="card-title">User Management</h5>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 product-card" data-category="longsleeves">
            <div id="ll" class="card">
                <a href="{{ route('products.index') }}">
                    <img class="card-img-top" src="https://icon-library.com/images/product-icon-png/product-icon-png-0.jpg" alt="Product 1">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Product Management</h5>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 product-card" data-category="longsleeves">
            <div id="ll" class="card">
                <a href="">
                    <img class="card-img-top" src="https://t4.ftcdn.net/jpg/00/98/26/11/360_F_98261159_Po5JS7ds82XaePJIsG1MiEtHRzOeUPNj.jpg" alt="Product 1">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Contact Messages</h5>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

</div>

<!-- Include Bootstrap and your custom script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
