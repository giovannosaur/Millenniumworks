<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MILLENNIUMWORKS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>
    

	<?php $__env->startSection('title', 'Homepage'); ?>

	<?php $__env->startSection('content'); ?>
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Poppins', sans-serif;
        }
        .form-container {
            max-width: 400px;
            padding: 2rem;
            margin: 5% auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .logo {
            font-weight: bold;
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
    </style>

    <div class="form-container">
    <div class="logo">MILLENNIUMWORKS</div>
    <h4 class="text-center mb-4">Login ke Akun Anda</h4>
    <form method="POST" action="<?php echo e(route('login')); ?>">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email Anda" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password Anda" required>
    </div>
    <button type="submit" class="btn btn-primary w-100">Login</button>
    <p class="text-center mt-3">Belum punya akun? <a href="<?php echo e(route('signup')); ?>">Daftar di sini</a>
    </form>
    </div>
    <?php $__env->stopSection(); ?>

</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROGRAMMING\Web Programming\TUGAS BESAR WEBAPP\Millenniumworks\resources\views/login.blade.php ENDPATH**/ ?>