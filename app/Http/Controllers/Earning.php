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
                ->whereYear('created_at', Carbon::now()->year)
                ->where('user_id', auth()->id())
                ->paginate(12)
        ]);
    }
}
