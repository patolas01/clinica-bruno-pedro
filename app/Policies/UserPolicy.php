<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{

    public function before($user, $ability)
    {
        if ($user->isAdmin()) {
            return true;
        }
    }

    public function viewAny(User $user): bool
    {
        //
        return false;
    }

    public function view(User $user, User $model): bool
    {
        //
        return true;
    }

    public function create(User $user): bool
    {
        //
        return false;
    }

    public function update(User $user, User $model): bool
    {
        //
        if ($user->id == $model->id) {
            return true;
        }
        return false;
    }

    public function updateRole(User $user, User $model)
    {
        return false;
    }

    public function delete(User $user, User $model): bool
    {
        return false;
        //
    }

}
