<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function view()
    {
        $t = Product::query()
            ->where('user_id', auth()->id())
            ->whereMonth('created_at', \Illuminate\Support\Carbon::now()->month)
            ->whereYear('created_at', \Illuminate\Support\Carbon::now()->year)
            ->sum('cost');
        $l = Product::query()
            ->where('user_id', auth()->id())
            ->whereMonth('created_at', \Illuminate\Support\Carbon::now()->subMonth())
            ->whereYear('created_at', \Illuminate\Support\Carbon::now()->year)
            ->sum('cost');
        $y = Product::query()
            ->where('user_id', auth()->id())
            ->whereYear('created_at', \Illuminate\Support\Carbon::now()->year)
            ->sum('cost');

        $c = Product::query()
            ->groupBy(['ordered_on', 'user_id', 'id'])
            ->where('user_id', auth()->id())
            ->get()->collect();

        if ($t == 0 or $l == 0)
        {
            $d = 0;
        } else if ($t < $l){
            $z = ($l - $t) / $l;
            $d = $z * 100;
        } else if ($t > $l){
            $z = ($l / $t);
            $d = $z * 100;
        } else {
            $d = 0;
        }

        return view('dashboard', [
            'thismonth' => $t,
            'lastmonth' => $l,
            'thisyear' => $y,
            'difference' => $d,
            'chart' => $c,
        ]);
    }
}
