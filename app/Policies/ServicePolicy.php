<?php

namespace App\Policies;

class ServicePolicy extends BaseResourcePolicy
{
    protected function permissionPrefix(): string
    {
        return 'services';
    }
}
