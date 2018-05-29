<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

use App\User;

class UserProfile extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}