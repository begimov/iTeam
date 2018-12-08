<?php

namespace App\Http\Middleware\Products;

use Closure;

class VerifyFastOrderAccessToken
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
        if ($request->route('code') !== $request->route('order')->getFastOrderToken() 
            || !is_null($request->route('order')->user_id)) {

            return redirect()->route('home');
            
        }
        
        return $next($request);
    }
}
