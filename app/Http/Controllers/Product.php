<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    public function view()
    {
        return view('products', [
            'list' => \App\Models\Product::query()->where('user_id', auth()->id())->paginate(15),
        ]);
    }

    public function new()
    {
        return view('newproduct', [
            'brand' => \App\Models\Brand::query()->get(),
            'card' => \App\Models\Card::query()->where('user_id', auth()->id())->get(),
            'category' => \App\Models\Category::query()->get(),
            'supplier' => \App\Models\Supplier::query()->get(),
        ]);
    }
}
