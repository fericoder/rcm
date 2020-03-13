<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $guarded = ['id'];

    public function residents()
    {
        return $this->hasMany('App\Resident');
    }

}
