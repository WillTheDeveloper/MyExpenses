<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Card extends Controller
{
    public function view()
    {
        return view('cards');
    }
}
