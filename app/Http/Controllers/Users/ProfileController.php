<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\Users\ProfileStoreRequest;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('users.profile.settings');
    }

    public function store(ProfileStoreRequest $request)
    {
        $request->user()->update($request->only('name', 'email'));
        return back()->withSuccess(trans('auth.profile_updated'));
    }
}
