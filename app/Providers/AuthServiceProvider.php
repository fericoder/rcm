<?php

namespace App\Providers;

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
            return \Auth::user()->isAdmin == 1;
        });

        \Gate::define('boardMember', function(){
            return \Auth::user()->userType == 'boardMember';
        });

        \Gate::define('finance', function(){
            return \Auth::user()->userType == 'finance';
        });


        \Gate::define('dataEntry', function(){
            return \Auth::user()->isDataEntry == 1;
        });

    }
}
