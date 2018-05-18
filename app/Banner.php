<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //
    protected $table = "banners";

    protected $fillable = [
        'image',
        'links',
        'video_link',
    ];
}
