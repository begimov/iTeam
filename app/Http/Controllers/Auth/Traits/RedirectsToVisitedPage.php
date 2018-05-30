<?php

namespace App\Http\Controllers\Auth\Traits;

trait RedirectsToVisitedPage
{
    public function redirectToPreviouslyVisitedPage()
    {
        if (session()->has($key = config('session.keys.page_path'))) {

            $pagePath = session($key);

            session()->forget($key);

            return redirect($pagePath);
        }
    }
}
