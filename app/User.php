<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use SoftDeletes;

    public function complex()
    {
        return $this->belongsTo('App\Complex');
    }

    public function invoices()
    {
        return $this->hasMany('App\Invoice');
    }

    public function residents()
    {
        return $this->hasMany('App\Resident');
    }


    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }


    public function hasRole($role)
    {
        if (is_string($role)){
            return $this->roles->contain('name', $role);
        }
        return !! $role->intersect($this->roles)->count();
    }


    public function assignRole(Role $role)
    {
        return $this->roles()->save($role);
    }

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
