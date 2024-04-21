<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'image_url',
        'video_url',
        'title',
        'description'
    ];
}
