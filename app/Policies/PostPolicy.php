<?php

namespace App\Policies;

class PostPolicy extends BaseResourcePolicy
{
    protected function permissionPrefix(): string
    {
        return 'posts';
    }
}
