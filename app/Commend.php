<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commend extends Model
{
    //
    protected $table = "commend";

    protected $fillable = [
        'news_id',
        'user_name',
        'commend_text',
    ];

    public function CommendReplay()
    {
        return $this->hasMany('App\CommendReplay','commend_id');
    }
    public function news()
    {
        return $this->hasMany('App\News','news_id');
    }
}
