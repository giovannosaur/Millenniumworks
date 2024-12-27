<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MILLENNIUMWORKS.</title>
	<style>
    </style>
</head>
<body>

	

	<?php $__env->startSection('title', 'Homepage'); ?>

	<?php $__env->startSection('content'); ?>

    <div class="container">
        <h1>Your Cart</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->product->name); ?></td>
                        <td><?php echo e($item->quantity); ?></td>
                        <td>Rp <?php echo e(number_format($item->product->price, 0, ',', '.')); ?></td>
                        <td>Rp <?php echo e(number_format($item->product->price * $item->quantity, 0, ',', '.')); ?></td>
                        <td>
                            <!-- Remove button (optional) -->
                            <form action="<?php echo e(route('cart.remove', $item->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Remove</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <a href="<?php echo e(route('checkout')); ?>"><button class="btn btn-success">Checkout</button></a>
    </div>

<?php $__env->stopSection(); ?>
	
</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROGRAMMING\Web Programming\TUGAS BESAR WEBAPP\Millenniumworks\resources\views/cart.blade.php ENDPATH**/ ?>