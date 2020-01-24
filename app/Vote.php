<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public function voteOptions()
    {
        return $this->hasMany('App\VoteOption');
    }

    public function complex()
    {
        return $this->belongsTo('App\Complex');
    }
}
