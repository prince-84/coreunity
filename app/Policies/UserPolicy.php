<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy extends BaseResourcePolicy
{
    protected function permissionPrefix(): string
    {
        return 'users';
    }

    /**
     * Prevent non-super-admins from deleting themselves or Super Admins
     */
    public function delete(User $user, $model): bool
    {
        if ($user->id === $model->id) {
            return false;
        }

        return parent::delete($user, $model);
    }
}
