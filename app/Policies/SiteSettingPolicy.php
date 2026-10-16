<?php

namespace App\Policies;

class SiteSettingPolicy extends BaseResourcePolicy
{
    protected function permissionPrefix(): string
    {
        return 'global_settings';
    }
}
