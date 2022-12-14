<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Subscription extends Controller
{
    public function view()
    {
        return view('subscriptions', [
            'monthly' => \App\Models\Subscription::query()
                ->where('user_id', auth()->id())
                ->where('type', 'monthly')
                ->where('active', true),
            'yearly' => \App\Models\Subscription::query()
                ->where('user_id', auth()->id())
                ->where('type', 'yearly')
                ->where('active', true)
        ]);
    }
}
