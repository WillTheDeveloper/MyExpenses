<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function view()
    {
        $t = Product::query()
            ->whereMonth('created_at', \Illuminate\Support\Carbon::now()->month)
            ->whereYear('created_at', \Illuminate\Support\Carbon::now()->year)
            ->sum('cost');
        $l = Product::query()
            ->whereMonth('created_at', \Illuminate\Support\Carbon::now()->subMonth())
            ->whereYear('created_at', \Illuminate\Support\Carbon::now()->year)
            ->sum('cost');
        $y = Product::query()
            ->whereYear('created_at', \Illuminate\Support\Carbon::now()->year)
            ->sum('cost');

        return view('dashboard', [
            'thismonth' => $t,
            'lastmonth' => $l,
            'thisyear' => $y
        ]);
    }
}
