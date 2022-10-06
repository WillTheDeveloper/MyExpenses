<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('login'));
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', [\App\Http\Controllers\Dashboard::class, 'view'])->name('dashboard');

    Route::get('/products', [\App\Http\Controllers\Product::class, 'view'])->name('products');

    Route::get('/earnings', [\App\Http\Controllers\Earning::class, 'view'])->name('earnings');

    Route::get('/cards', [\App\Http\Controllers\Card::class, 'view'])->name('cards');

    Route::get('/subscriptions', [\App\Http\Controllers\Subscription::class, 'view'])->name('subscriptions');

    Route::get('/brands', [\App\Http\Controllers\Brand::class, 'view'])->name('brands');

    Route::get('/categories', [\App\Http\Controllers\Category::class, 'view'])->name('categories');

    Route::get('/supplier', [\App\Http\Controllers\Supplier::class, 'view'])->name('supplier');
});
