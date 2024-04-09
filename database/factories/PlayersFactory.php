<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Players>
 */
class PlayersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'position' => $this->faker->word(),
            'profile_image' => $this->faker->imageUrl(),
            'birth_date' => $this->faker->word(),
            'birth_place' => $this->faker->word(),
            'social' => $this->faker->word(),
            'preferred_foot' => $this->faker->word(),
            'height' => $this->faker->word(),
            'market_value' => $this->faker->word(),
            'outfitter' => $this->faker->word(),
            'career_goals' => $this->faker->word(),
            'world_cups' => $this->faker->word(),
            'continental_cups' => $this->faker->word(),
            'ballon_dors' => $this->faker->word(),
            'champions_league' => $this->faker->word(),
            'league_titles' => $this->faker->word(),
            'club_debut' => $this->faker->word(),
            'current_club' => $this->faker->word(),
            'previous_clubs' => $this->faker->word(),
            'national_team' => $this->faker->word(),
            'national_debut' => $this->faker->word(),
            'overall' => $this->faker->word(),
            'pace' => $this->faker->word(),
            'shooting' => $this->faker->word(),
            'passing' => $this->faker->word(),
            'dribbling' => $this->faker->word(),
            'defending' => $this->faker->word(),
            'physical' => $this->faker->word(),
            'photo1' => $this->faker->imageUrl(),
            'photo2' => $this->faker->imageUrl(),
            'photo3' => $this->faker->imageUrl(),
            'photo4' => $this->faker->imageUrl(),
            'photo5' => $this->faker->imageUrl()
        ];
    }
}
