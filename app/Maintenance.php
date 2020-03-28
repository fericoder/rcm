<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    public function equipments()
    {
        return $this->belongsToMany('App\Equipment');
    }

}
