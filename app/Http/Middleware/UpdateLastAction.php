<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;

class UpdateLastAction
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
        if (\Auth::check() == "true") {
            // Update Last Action TimeStamp In DataBase
            $current_time = Carbon::now()->toDateTimeString();
            $userEmail = \Auth::user()->email;
            \App\User::where('email', $userEmail)->update(['lastAction' => $current_time]);
        }

        return $next($request);
    }
}
