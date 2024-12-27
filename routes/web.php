<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('index');
});


Route::get('/users', function () {
    return view('users');
})->middleware('is_admin')->name('users');


Route::get('/401', function () {
    return view('401');
}); // restricted page


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
// Route::get('/account', [AccountController::class, 'showAccount'])->name('account')->middleware('auth');
Route::view('/account', 'account')->name('account');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::view('/index', 'index')->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/login', 'login')->name('login');
Route::view('/signup', 'signup')->name('signup');
Route::view('/detailproduk', 'detailproduk')->name('detailproduk');
Route::view('/wishlist', 'wishlist')->name('wishlist');


Route::get('/admin', function () {
    return view('admin');
})->middleware('is_admin');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');


Route::middleware(['is_admin'])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});

// --    products    -- //
Route::middleware(['is_admin'])->group(function () {

    // Product Management (CRUD) for Admin
    Route::get('/admin/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/admin/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/admin/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/admin/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/admin/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
});

// Public Products Page (User view)
Route::get('/shop', [ProductController::class, 'indexPublic'])->name('shop.index');

//cart
Route::middleware('auth')->group(function () {
    Route::post('cart/{id}', [CartController::class, 'add'])->name('cart.add');
    Route::delete('cart/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::get('cart', [CartController::class, 'index'])->name('cart.index');
});

//details
Route::get('product/{id}', [ProductController::class, 'show'])->name('product.details');
//checkout
Route::middleware('auth')->get('checkout', [CartController::class, 'checkout'])->name('checkout');
