<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('users.profile.settings');
    }

    public function store(Request $request)
    {
        dd($request->only('name', 'email'));
        $request->user()->update($request->only('name', 'email'));
        return back()->withSuccess('Account has been updated.');
    }
}
