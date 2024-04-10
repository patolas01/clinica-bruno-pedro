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
        return $user->isAdmin(); // Apenas administradores podem ver a lista de galerias
    }

    public function view(User $user, Galeria $galeria)
    {
        return $user->isAdmin() || $user->id === $galeria->user_id; // Apenas administradores ou o proprietário podem ver uma galeria específica
    }

    public function create(User $user)
    {
        return $user->isAdmin(); // Apenas administradores podem criar uma nova galeria
    }

    public function update(User $user, Galeria $galeria)
    {
        return $user->isAdmin() || $user->id === $galeria->user_id; // Apenas administradores ou o proprietário podem atualizar uma galeria
    }

    public function delete(User $user, Galeria $galeria)
    {
        return $user->isAdmin(); // Apenas administradores podem excluir uma galeria
    }
}
