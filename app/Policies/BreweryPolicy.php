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

    public function destroy(User $user, Brewery $brewery) {
        // TODO aici poti sa verifici si daca ii admin
        // return $user->isAdmin() || $user->ownsBrewery($brewery);
        return $user->ownsBrewery($brewery);
    }
}
