<?php

namespace App\Policies;

class OurWorkSectionPolicy extends BaseResourcePolicy
{
    protected function permissionPrefix(): string
    {
        return 'our_work';
    }
}
