<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded = ['id'];

    public function invoice(){
        return $this->belongsTo('App\Invoice');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

}
