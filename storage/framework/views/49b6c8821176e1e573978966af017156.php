<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand brandname" href="<?php echo e(url('/')); ?>">MILLENNIUMWORKS.</a>
        <div class="d-flex ms-auto">
            <input type="text" id="searchBar" class="form-control me-2" placeholder="Search for products..." style="display: none;" onkeypress="handleSearchKeyPress(event)">
            <a class="btn btn-outline-primary me-2" type="button" aria-label="Search" onclick="toggleSearchBar()">
                <i class="bi bi-search"></i>
            </a>

            
            <?php if(auth()->guard()->check()): ?>
                <a class="btn btn-outline-secondary me-2" type="button" href="<?php echo e(route('account')); ?>" aria-label="Account">
                    <i class="bi bi-person"></i>
                </a>
                <a class="btn btn-outline-danger me-2" type="button" href="<?php echo e(route('wishlist')); ?>" aria-label="Wishlist">
				  <i class="bi bi-heart"></i>
                </a>
            <?php endif; ?>

            
            <?php if(auth()->guard()->guest()): ?>
                <a class="btn btn-outline-secondary me-2" type="button" href="<?php echo e(route('login')); ?>" aria-label="Account">
                    <i class="bi bi-person"></i>
                </a>
            <?php endif; ?>

            <a class="btn btn-outline-success" type="button" aria-label="View Cart">
                <i class="bi bi-cart"></i>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo e(url('/')); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('shop.index')); ?>">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('about')); ?>">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('contact')); ?>">Contact</a>
                </li>
                <?php if(auth()->guard()->check()): ?>
                <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-flex justify-content-end">
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-danger w-100" type="submit">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </button>
                </form>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH E:\PROGRAMMING\Web Programming\TUGAS BESAR WEBAPP\Millenniumworks\resources\views/partials/navbar.blade.php ENDPATH**/ ?>