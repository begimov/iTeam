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
        $accessCode = $request->route('code');

        if ($accessCode !== '123abc') {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
