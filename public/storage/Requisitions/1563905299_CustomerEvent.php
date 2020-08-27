<?php

namespace App;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

use SoftDeletes;


class CustomerEvent extends Eloquent
{
    protected $guarded = ['id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
