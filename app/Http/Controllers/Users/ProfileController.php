<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = auth()->user();
        return view('users.profile.settings', compact('user'));
    }
}
