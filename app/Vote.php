<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vote extends Model
{
    use SoftDeletes;

    public function options()
    {
        return $this->hasMany('App\VoteOption');
    }

    public function complex()
    {
        return $this->belongsTo('App\Complex');
    }
}
