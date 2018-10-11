<?php

namespace App\Http\Middleware\Products;

use Closure;

class VerifyMaterialAccessToken
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
        if ($request->route('code') !== $request->route('material')->token) {

            return redirect()->route('home');
            
        }

        return $next($request);
    }
}
