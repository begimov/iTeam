<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

use App\User;

class UserProfile extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}