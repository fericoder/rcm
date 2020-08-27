<?php

namespace App\Providers;
use App\Permission;
use App\User;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        \Gate::define('superAdmin', function(){
            return \Auth::user()->userType == 'superAdmin';
        });

        \Gate::define('admin', function(){
            return \Auth::user()->userType == 'admin';
        });

        \Gate::define('boardMember', function(){
            return \Auth::user()->userType == 'boardMember';
        });

        \Gate::define('finance', function(){
            return \Auth::user()->userType == 'finance';
        });

        \Gate::define('monitoring', function(){
            return \Auth::user()->userType == 'monitoring';
        });


        \Gate::define('dataEntry', function(){
            return \Auth::user()->userType == 'dataEntry';
        });

        foreach ($this->getPermission() as $permission){
            \Gate::define($permission->name, function ($user) use ($permission) {
                return $user->hasRole($permission->roles);
            });
        }

    }

    protected function getPermission()
    {
        return Permission::with('roles')->get();
    }

}
