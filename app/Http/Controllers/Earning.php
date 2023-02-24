<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class Earning extends Controller
{
    public function view()
    {
        return view('earnings', [
            'list' => \App\Models\Earning::query()
                ->whereYear('paid', Carbon::now()->year)
                ->where('user_id', auth()->id())
                ->paginate(12),
            'earned' => \App\Models\Earning::query()
                ->whereYear('paid', Carbon::now()->year)
                ->where('user_id', auth()->id())
                ->sum('amount'),
            'average' => \App\Models\Earning::query()
                ->whereYear('paid', Carbon::now()->year)
                ->where('user_id', auth()->id())
                ->average('amount')
        ]);
    }

    public function add()
    {
        return view('addearnings');
    }
}
