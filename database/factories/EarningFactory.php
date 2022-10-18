<?php

namespace Database\Factories;

use App\Models\Card;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Earning>
 */
class EarningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'from' => $this->faker->company,
            'card_id' => Card::query()->get('id')->random(),
            'user_id' => User::query()->get('id')->random(),
            'paid'=> Carbon::now()->toDate(),
            'amount' => $this->faker->numberBetween('100', '2222')
        ];
    }
}
