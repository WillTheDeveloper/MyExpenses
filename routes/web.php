<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('login'));
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', [\App\Http\Controllers\Dashboard::class, 'view'])->name('dashboard');

    Route::get('/products', [\App\Http\Controllers\Product::class, 'view'])->name('products');

    Route::get('/earnings', [\App\Http\Controllers\Earning::class, 'view'])->name('earnings');
});
