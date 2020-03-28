<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penalty extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function complex()
    {
        return $this->belongsTo('App\Complex');
    }

}
