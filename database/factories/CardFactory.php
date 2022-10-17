<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['credit', 'debit']),
            'lastfour' => $this->faker->randomNumber(4),
            'user_id' => User::query()->get('id')->random(),
            'name' => $this->faker->name
        ];
    }
}
