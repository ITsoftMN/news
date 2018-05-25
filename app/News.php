<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = "news";

    protected $fillable = [
        'title',
        'cat_id',
        'sub_cat_id',
        'medium_title',
        'description',
        'image',
        'seen',
        'commend',
        'author',
        'slider',
        'featured'
    ];
    public function Category()
    {
        return $this->belongsTo('App\Category','cat_id');
    }

    public function Commend()
    {
        return $this->hasMany('App\Commend','news_id');
    }
}
