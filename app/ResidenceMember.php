<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResidenceMember extends Model
{
    use SoftDeletes;

    public $guarded = ['id' ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
