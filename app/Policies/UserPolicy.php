<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    public function updateProfile(User $currentUser, User $user)
    {
        return $currentUser->is($user);
    }
}
