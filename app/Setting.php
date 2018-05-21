<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
    protected $table = "settings";

    protected $fillable = [
        'logo',
        'title',
        'copyright',
        'fb_link',
        'tw_link',
        'you_link',
        'other_link',
    ];

}
