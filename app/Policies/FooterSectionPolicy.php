<?php

namespace App\Policies;

class FooterSectionPolicy extends BaseResourcePolicy
{
    protected function permissionPrefix(): string
    {
        return 'footer';
    }
}
