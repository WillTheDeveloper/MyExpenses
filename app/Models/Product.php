<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'item',
        'details',
        'user_id',
        'brand_id',
        'card_id',
        'category_id',
        'supplier_id',
        'ordered_on',
        'delivered_on',
        'cost',
        'shipping'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function Card()
    {
        return $this->belongsTo(Card::class);
    }

    public function Subscription()
    {
        return $this->hasMany(Subscription::class);
    }
}
