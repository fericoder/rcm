<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VoteOption extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];

    public function vote()
    {
        return $this->belongsTo('App\Vote');
    }
}
