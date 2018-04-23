<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //

    protected $table = "sub_cat";

    protected $fillable = [
        'name',
        'cat_id'
    ];
}
