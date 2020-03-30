<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enactment extends Model
{
    protected $guarded = ['id'];
    public function proceeding()
    {
        return $this->belongsTo('App\Proceeding');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
