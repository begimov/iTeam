<?php

namespace App\Http\Middleware\Products;

use Closure;

class ProtectNonFreeProductMaterials
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
        $product = $request->route('product');
        dd($product);
        return $next($request);
    }
}
