<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parking extends Model
{
    protected $guarded = ['id'];
    use Illuminate\Database\Eloquent\SoftDeletes;
}
