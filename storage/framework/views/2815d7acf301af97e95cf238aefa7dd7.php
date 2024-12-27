<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MILLENNIUMWORKS.</title>
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
	<style>
    </style>
</head>
<body>
    

    <?php $__env->startSection('title', 'Homepage'); ?>

    <?php $__env->startSection('content'); ?>

	
    <div class="container mt-5" style="font-family: 'Poppins'; font-weight: 400;">
    <h2 class="text-center mb-4">Checkout</h2>
    
    <!-- Order Summary Section -->
    <div class="row">
        <div class="col-md-6">
            <h4>Order Summary</h4>
            <div class="card p-3 mb-4">
                <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="mb-4">
                        <img src="<?php echo e($item->product->image); ?>" class="img-fluid mb-3" alt="<?php echo e($item->product->name); ?>" width="200">
                        <p>Product Name: <strong><?php echo e($item->product->name); ?></strong></p>
                        <p>Quantity: <strong><?php echo e($item->quantity); ?></strong></p>
                        <p>Price: <strong>IDR <?php echo e(number_format($item->product->price, 0, ',', '.')); ?></strong></p>
                        <hr>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <h4><p>Total: <strong>IDR <?php echo e(number_format($total, 0, ',', '.')); ?></strong></p></h4>
            </div>
        </div>

        <div class="col-md-6">
            <div id="checkoutForm">
                <form>
                    <!-- Shipping Details -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" placeholder="John Doe" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat Lengkap</label>
                        <input type="text" class="form-control" id="address" placeholder="Jl 123" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="city" class="form-label">Kota</label>
                            <input type="text" class="form-control" id="city" placeholder="Kota" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="zip" class="form-label">Kode Pos</label>
                            <input type="text" class="form-control" id="zip" placeholder="Kode Pos" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="number" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="number" placeholder="08123456789" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="code" class="form-label">Kode Promo (opsional)</label>
                            <input type="text" class="form-control" id="code" placeholder="">
                        </div>
                    </div>

                    <!-- Payment method -->
                    <h5>Payment Method</h5>
                    <div class="form-check mb-5">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="gopay" required>
                        <label class="form-check-label" for="gopay">
                            <img width="200" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9GhNwf2lw9sqrY94_kejAofwpBgKrX5krew&s" alt="GoPay">
                        </label>
                    </div>
                    <div class="form-check mb-5">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="qr">
                        <label class="form-check-label" for="qr">
                            <img width="200" src="https://www.tobekocigaretteshop.com/wp-content/uploads/2024/05/qris.png" alt="QRIS">
                        </label>
                    </div>
                    <div class="form-check mb-5">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="tf">
                        <label class="form-check-label" for="tf">Transfer Bank (BCA/Mandiri/BNI/Permata)</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Place Order</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROGRAMMING\Web Programming\TUGAS BESAR WEBAPP\Millenniumworks\resources\views/checkout.blade.php ENDPATH**/ ?>