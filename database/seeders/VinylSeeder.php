<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Vinyl;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VinylSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vinyl::factory(50)->create();
    }
}
