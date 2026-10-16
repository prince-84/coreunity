<?php

namespace App\Policies;

class GlobalSeoSettingPolicy extends BaseResourcePolicy
{
    protected function permissionPrefix(): string
    {
        return 'global_settings';
    }
}
