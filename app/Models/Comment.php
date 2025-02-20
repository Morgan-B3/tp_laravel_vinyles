<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;

    protected $table = 'comments';

    protected $fillable = [
        'vinyl_id',
        'user_id',
        'content',
    ];

    public function vinyl()
    {
        return $this->belongsTo(Vinyl::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
