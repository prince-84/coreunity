<?php

namespace App\Policies;

class CrmFormPolicy extends BaseResourcePolicy
{
    protected function permissionPrefix(): string
    {
        return 'crm';
    }
}
