<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function view()
    {
        $t = Product::query()->whereMonth('created_at', \Illuminate\Support\Carbon::now()->month)->sum('cost');
        $l = Product::query()->whereMonth('created_at', \Illuminate\Support\Carbon::now()->subMonth())->sum('cost');

        if ($t == 0 or $l == 0){
            $d = 0;
        } else {
            $d = ($l / $t) * 100;
        }

        return view('dashboard', [
            'thismonth' => $t,
            'lastmonth' => $l,
            'difference' => $d
        ]);
    }
}
