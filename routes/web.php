<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

// Home Route
Route::get('/', function () {
    $products = Product::all();
    return view('home', compact('products'));
});

// Cart Route
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

// Product Routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Additional forms
    Route::get('/profile/update-password', [ProfileController::class, 'showPasswordForm'])->name('profile.update-password');
    Route::get('/profile/delete', [ProfileController::class, 'showDeleteForm'])->name('profile.delete');
});

// Admin Routes
// Admin Routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/products', [ProductController::class, 'adminIndex'])->name('admin.products.index');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/admin/products', [ProductController::class, 'store'])->name('admin.products.store');
    Route::get('/admin/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::patch('/admin/products/{product}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::delete('/admin/products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
});


require __DIR__.'/auth.php';
