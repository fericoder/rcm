<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $guarded = ['id'];

    public function reports()
    {
        return $this->belongsToMany('App\Maintenance');
    }

}
