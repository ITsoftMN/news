<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = "news";

    protected $fillable = [
        'title',
        'medium_title',
        'description',
        'image',
        'seen',
        'commend',
        'author'
    ];

}
