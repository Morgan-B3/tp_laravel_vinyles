<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Genre>
 */
class GenreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => array_rand(['Rock', 'Pop', 'Jazz', 'Blues', 'Rap', 'Reggae', 'Classique', 'Electro', 'Metal', 'Punk', 'Folk', 'Country', 'Disco']),
        ];
    }
}
