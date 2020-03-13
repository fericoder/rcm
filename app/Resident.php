<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function complex()
    {
        return $this->belongsTo('App\Complex');
    }


}
