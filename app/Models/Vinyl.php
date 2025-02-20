<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Vinyl extends Model
{
    use HasFactory;

    protected $table = 'vinyls';

    protected $fillable = [
        'title',
        'artist_id',
        'release_year',
        'cover',
        'description',
        'label'
    ];



    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, foreignPivotKey: "vinyl_id");
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
