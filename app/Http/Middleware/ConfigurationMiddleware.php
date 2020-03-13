<?php

namespace App\Http\Middleware;

use Closure;

class ConfigurationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (request()->routeIs('*logout*') OR request()->routeIs('*configuration*')){
            return $next($request);
        }

            if (strlen(\Auth::user()->complex->name) < 1 OR strlen(\Auth::user()->complex->address) < 1 OR strlen(\Auth::user()->complex->units) < 1){
                return redirect()->route('configuration.index');
            }

        return $next($request);

    }
}
