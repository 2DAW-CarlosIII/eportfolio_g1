<?php

namespace App\Policies;

use App\Models\CicloFormativo;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;

class CicloFormativoPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, CicloFormativo $cicloFormativo): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return Gate::check('create', CicloFormativo::class);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, CicloFormativo $cicloFormativo): bool
    {
        return Gate::check('update', $cicloFormativo);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, CicloFormativo $cicloFormativo): bool
    {
        return Gate::check('delete', $cicloFormativo);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, CicloFormativo $cicloFormativo): bool
    {
        return Gate::check('restore', $cicloFormativo);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, CicloFormativo $cicloFormativo): bool
    {
        return Gate::check('forceDelete', $cicloFormativo);
    }
}
