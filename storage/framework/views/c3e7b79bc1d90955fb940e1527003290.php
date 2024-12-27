<!DOCTYPE html>
<html lang="id">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Us - MILLENNIUMWORKS</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
   <style>
       body {
           background-color: #f0f2f5;
           font-family: 'Poppins', sans-serif;
       }
       .form-container {
           max-width: 600px;
           padding: 2rem;
           margin: 5% auto;
           background-color: white;
           border-radius: 8px;
           box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
       }
       .brandname {
           font-weight: bold;
           font-size: 24px;
           text-align: center;
           margin-bottom: 20px;
           color: #333;
       }
       .contact-info {
           text-align: center;
           font-size: 14px;
           color: #555;
           margin-top: 15px;
       }
   </style>
</head>
<body>
<div class="container-fluid md-left">
   <a href="<?php echo e(route('index')); ?>" class="btn btn-outline-primary me-2" type="button" aria-label="Search">
   <i class="bi bi-house-door-fill"></i>
   </a>
</div>

<div class="form-container">
   <div class="brandname">MILLENNIUMWORKS</div>
   <h4 class="text-center mb-4">Hubungi Kami</h4>
   
   <?php if(session('success')): ?>
       <div class="alert alert-success">
           <?php echo e(session('success')); ?>

       </div>
   <?php endif; ?>

   <form method="POST" action="<?php echo e(route('messages.store')); ?>">
       <?php echo csrf_field(); ?>
       <div class="mb-3">
           <label for="name" class="form-label">Nama Lengkap</label>
           <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="name" name="name" placeholder="Masukkan nama lengkap Anda" required value="<?php echo e(old('name')); ?>">
           <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
               <div class="invalid-feedback"><?php echo e($message); ?></div>
           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
       </div>
       <div class="mb-3">
           <label for="email" class="form-label">Email</label>
           <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" name="email" placeholder="Masukkan email Anda" required value="<?php echo e(old('email')); ?>">
           <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
               <div class="invalid-feedback"><?php echo e($message); ?></div>
           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
       </div>
       <div class="mb-3">
           <label for="subject" class="form-label">Subjek</label>
           <input type="text" class="form-control <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="subject" name="subject" placeholder="Masukkan subjek pesan Anda" required value="<?php echo e(old('subject')); ?>">
           <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
               <div class="invalid-feedback"><?php echo e($message); ?></div>
           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
       </div>
       <div class="mb-3">
           <label for="message" class="form-label">Pesan</label>
           <textarea class="form-control <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="message" name="message" rows="4" placeholder="Tulis pesan Anda di sini..." required><?php echo e(old('message')); ?></textarea>
           <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
               <div class="invalid-feedback"><?php echo e($message); ?></div>
           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
       </div>
       <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
   </form>

   <div class="contact-info mt-4">
       <p><strong>Alamat:</strong> Jl. Contoh No.123, Jakarta, Indonesia</p>
       <p><strong>Email:</strong> support@millenniumworks.com</p>
       <p><strong>Telepon:</strong> +62 123 4567 890</p>
   </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html><?php /**PATH E:\PROGRAMMING\Web Programming\TUGAS BESAR WEBAPP\Millenniumworks\resources\views/contact.blade.php ENDPATH**/ ?>