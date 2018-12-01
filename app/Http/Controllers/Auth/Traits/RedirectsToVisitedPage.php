<?php

namespace App\Http\Controllers\Auth\Traits;

use Illuminate\Http\Request;

trait RedirectsToVisitedPage
{
    public function redirectToPreviouslyVisitedPage()
    {
        if (session()->has($key = config('session.keys.ordered_product'))) {
            return $this->storeOrder($key);
        }

        if (session()->has($key = config('session.keys.page_path'))) {

            $pagePath = session($key);

            session()->forget($key);

            return redirect($pagePath);
        }
    }

    protected function storeOrder($key)
    {
        $data = session($key);

        session()->forget($key);

        $orders = app()->make(\App\Repositories\Contracts\Products\OrderRepository::class);

        $orders->store($data);

        return redirect()->route('user.dashboard.index');
    }
}
