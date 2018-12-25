<?php

namespace App\Policies;

use App\User;
use App\Brewery;
use Illuminate\Auth\Access\HandlesAuthorization;

class BreweryPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Brewery $brewery) {
        return $user->ownsBrewery($brewery);
    }
}
