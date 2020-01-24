<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VoteOption extends Model
{
    protected $guarded = ['id'];

    public function vote()
    {
        return $this->belongsTo('App\Vote');
    }
}
