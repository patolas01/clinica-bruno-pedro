<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Galeria;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class GaleriaPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->isAdmin();
    }

    public function view(User $user, Galeria $galeria)
    {
        return $user->isAdmin() || $user->id === $galeria->user_id;
    }

    public function create(User $user)
    {
        return $user->isAdmin();
    }

    public function update(User $user, Galeria $galeria)
    {
        return $user->isAdmin() || $user->id === $galeria->user_id;
    }

    public function delete(User $user, Galeria $galeria)
    {
        return $user->isAdmin();
    }
}
