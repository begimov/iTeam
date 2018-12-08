<?php

namespace App\Http\Middleware\Auth;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class LoginOrRegister
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
        if (\App\User::where('email', $request->email)->first()) {

            return $next($request);

        } else {

            $request = Request::create("/register", 'POST', $request->all());

            return Route::dispatch($request);  
        }
        return $next($request);
    }
}
