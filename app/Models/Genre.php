<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    /** @use HasFactory<\Database\Factories\GenreFactory> */
    use HasFactory;

    protected $table = 'genres';

    protected $fillable = [
        'name',
    ];

    public function vinyls()
    {
        return $this->belongsToMany(Vinyl::class, relatedPivotKey: "vinyl_id");
    }
}
