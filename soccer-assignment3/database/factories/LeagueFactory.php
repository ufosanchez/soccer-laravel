<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\League>
 */
class LeagueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'league_name' => fake()->firstName(),
            'country' => fake()->countryCode(),
            'season' => fake()->lastName(),
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
            'leagueURL' => fake()->url(),
        ];
    }
}
