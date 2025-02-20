<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vinyls', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('artist_id')->constrained()->casecadeOnDelete();
            $table->date('release_year');
            $table->text('description');
            $table->string('label');
            $table->string('cover');
            $table->timestamps();
        });

        Schema::create('genre_vinyl', function (Blueprint $table) {
            $table->foreignId('genre_id')->constrained()->casecadeOnDelete();
            $table->foreignId('vinyl_id')->constrained()->casecadeOnDelete();
            $table->primary(['genre_id', 'vinyl_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vinyls');
    }
};
