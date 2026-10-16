<?php

namespace App\Policies;

class OurClientsSectionPolicy extends BaseResourcePolicy
{
    protected function permissionPrefix(): string
    {
        return 'our_clients';
    }
}
