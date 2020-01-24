<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proceeding extends Model
{
    protected $guarded = ['id'];

    public function enactments()
    {
        return $this->hasMany('App\Enactment');
    }
}
