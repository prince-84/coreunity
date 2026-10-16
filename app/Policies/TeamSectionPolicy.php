<?php

namespace App\Policies;

class TeamSectionPolicy extends BaseResourcePolicy
{
    protected function permissionPrefix(): string
    {
        return 'team';
    }
}
