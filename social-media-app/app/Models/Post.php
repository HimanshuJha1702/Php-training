<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'body',
        'location',
        'mood',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
