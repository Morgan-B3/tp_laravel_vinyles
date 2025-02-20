<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
           'Rock',
           'Pop',
           'Jazz',
           'Blues',
           'Rap',
           'Reggae',
           'Classique',
           'Electro',
           'Metal',
           'Punk',
           'Folk',
           'Country',
           'Disco'
        ];

        foreach ($genres as $genre) {
            \App\Models\Genre::create([
                'name' => $genre,
            ]);
        }
    }
}
