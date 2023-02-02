<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SaintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name' => fake() -> firstName(),
            'birth_place' => fake() -> city(),
            'sainthood_date' => fake() -> dateTimeAD(),
            'miracles' => fake() -> numberBetween(1, 50)
        ];
    }
}
