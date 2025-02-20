<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\User;
use App\Models\Vinyl;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            GenreSeeder::class,
            ArtistSeeder::class,
            VinylSeeder::class,
            CommentSeeder::class,
        ]);

        $genres = Genre::all();

        Vinyl::all()->each(function ($vinyl) use ($genres) {
            $vinyl->genres()->attach(
                $genres->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
