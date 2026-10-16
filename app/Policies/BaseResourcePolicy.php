<?php

namespace App\Policies;

use App\Models\User;

abstract class BaseResourcePolicy
{
    /**
     * The permission key for this resource, e.g. 'services', 'pages', 'posts'.
     */
    abstract protected function permissionPrefix(): string;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can("view_{$this->permissionPrefix()}");
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, $model): bool
    {
        return $user->can("view_{$this->permissionPrefix()}");
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can("create_{$this->permissionPrefix()}");
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, $model): bool
    {
        return $user->can("edit_{$this->permissionPrefix()}");
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, $model): bool
    {
        return $user->can("delete_{$this->permissionPrefix()}");
    }

    /**
     * Determine whether the user can bulk delete models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can("delete_{$this->permissionPrefix()}");
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, $model): bool
    {
        return $user->can("delete_{$this->permissionPrefix()}");
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, $model): bool
    {
        return $user->can("delete_{$this->permissionPrefix()}");
    }
}
