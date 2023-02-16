<?php

use App\Http\Controllers\Brand;
use App\Http\Controllers\Card;
use App\Http\Controllers\Category;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Earning;
use App\Http\Controllers\Product;
use App\Http\Controllers\Subscription;
use App\Http\Controllers\Supplier;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('login'));
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', [Dashboard::class, 'view'])->name('dashboard');

    Route::get('/products', [Product::class, 'view'])->name('products');
    Route::get('/products/new', [Product::class, 'new'])->name('product.new');
    Route::post('/products/create', [Product::class, 'create'])->name('product.create');

    Route::get('/earnings', [Earning::class, 'view'])->name('earnings');
    Route::get('/earnings/add', [Earning::class, 'add'])->name('earning.add');

    Route::get('/cards', [Card::class, 'view'])->name('cards');

    Route::get('/subscriptions', [Subscription::class, 'view'])->name('subscriptions');

    Route::get('/brands', [Brand::class, 'view'])->name('brands');

    Route::get('/categories', [Category::class, 'view'])->name('categories');

    Route::get('/supplier', [Supplier::class, 'view'])->name('supplier');
});
