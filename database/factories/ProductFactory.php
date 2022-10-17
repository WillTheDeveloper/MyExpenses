<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Card;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'item' => $this->faker->name,
            'details' => $this->faker->sentences,
            'user_id' => User::query()->get('id')->random(),
            'brand_id' => Brand::query()->get('id')->random(),
            'card_id' => Card::query()->get('id')->random(),
            'category_id' => Category::query()->get('id')->random(),
            'supplier_id' => Supplier::query()->get('id')->random(),
            'ordered_on' => Carbon::now(),
            'delivered_on' => Carbon::now(),
            'cost' => $this->faker->numberBetween(1, 4444),
            'shipping' => $this->faker->numberBetween(1, 5)
        ];
    }
}
