<?php

namespace App\Policies;

use App\User;
use App\Receipe;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReceipePolicy
{
    use HandlesAuthorization;

    public function update(User $user, Receipe $receipe) {
        return $user->ownsReceipe($receipe);
    }

}
