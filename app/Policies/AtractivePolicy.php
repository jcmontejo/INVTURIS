<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Atractive;

class AtractivePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function owner(User $user, Atractive $atractive)
    {
        return $user->id ===$atractive->user_id;   
    }
}