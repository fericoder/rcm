<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    protected $guarded = ['id'];

    public function complex()
    {
        return $this->belongsTo('App\Complex');
    }
}
