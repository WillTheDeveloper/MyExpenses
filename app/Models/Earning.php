<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Earning extends Model
{
    use HasFactory;
    use HasUuids;

    protected $casts = [
        'paid' => 'date'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Card()
    {
        return $this->belongsTo(Card::class);
    }
}
