<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complex extends Model
{
    protected $guarded = ['id'];

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function votes()
    {
        return $this->hasMany('App\Vote');
    }

    public function residents()
    {
        return $this->hasMany('App\Resident');
    }

    public function website()
    {
        return $this->belongsTo('App\Website');
    }



}
