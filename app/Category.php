<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = "category";

    protected $fillable = [
        'name',
        'links',
        'header',
        'footer'
    ];

    public function subCategories()
    {
        return $this->hasMany('App\SubCategory','cat_id');
    }

    public function news()
    {
        return $this->hasMany('App\News','cat_id');
    }
}
