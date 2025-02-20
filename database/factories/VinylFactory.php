<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VinylFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'release_year' => $this->faker->year,
            'label' => $this->faker->company,
            'cover' => $this->faker->imageUrl($width=400, $height=400),
            'description' => $this->faker->text,
            'artist_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
