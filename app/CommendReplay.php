<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommendReplay extends Model
{
    //
    protected $table = "commend_replay";

    protected $fillable = [
        'commend_id',
        'user_name',
        'commend_text',
    ];
    public function Commend()
    {
        return $this->belongsTo('App\Commend','commend_id');
    }
}
