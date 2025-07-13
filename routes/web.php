<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

// for login
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// for admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products.index');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/admin/products', [ProductController::class, 'store'])->name('admin.products.store'); // belum ada view
    Route::get('/admin/products/{product}', [ProductController::class, 'show'])->name('admin.products.show');
    Route::get('/admin/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit'); // belum bisa edit produk
    Route::put('/admin/products/{product}/update', [ProductController::class, 'update'])->name('admin.products.update'); // belum ada view
    Route::delete('/admin/products/{product}/destroy', [ProductController::class, 'destroy'])->name('admin.products.destroy'); // belum ada view
});

// for user 
Route::middleware(['auth', 'userrole'])->group(function () {
    Route::get('/products', [ProductController::class, 'indexUser'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'createProductUser'])->name('products.create');
    Route::post('/products', [ProductController::class, 'storeUser'])->name('products.store');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
});

// for registration
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// for logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
