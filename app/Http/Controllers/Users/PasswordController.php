<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Users\PasswordStoreRequest;

class PasswordController extends Controller
{
    public function store(PasswordStoreRequest $request)
    {
        $request->user()->update([
            'password' => bcrypt($request->password),
        ]);

        return back()->withSuccess('Password has been updated.');
    }
}