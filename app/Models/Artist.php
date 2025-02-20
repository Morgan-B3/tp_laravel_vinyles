<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    /** @use HasFactory<\Database\Factories\ArtistFactory> */
    use HasFactory;

    protected $table = 'artists';

    protected $fillable = [
        'name',
        'birth_year',
        'country',
    ];

    public function vinyls()
    {
        return $this->hasMany(Vinyl::class);
    }
}
