<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IncomeHeading extends Model
{
  protected $guarded = ['id'];
    use SoftDeletes;

}
