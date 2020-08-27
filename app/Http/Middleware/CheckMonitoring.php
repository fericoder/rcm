<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class CheckMonitoring
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next){
        if(\Auth::user()->userType == 'monitoring'){
            if ( $request->route()->getName() != 'monitoring.index' AND $request->route()->getName() != 'monitoring.store' AND  $request->route()->getName() != 'penalty.store' AND $request->route()->getName() != 'dashboard-logout' ) {
                return redirect()->route('monitoring.index');
            }
        }
        return $next($request);
    }
}
