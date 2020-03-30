<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $guarded = ['id'];

    public function complex()
    {
        return $this->belongsTo('App\Complex');
    }
}
