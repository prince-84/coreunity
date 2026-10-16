<?php

namespace App\Policies;

class ClientReviewsSectionPolicy extends BaseResourcePolicy
{
    protected function permissionPrefix(): string
    {
        return 'testimonials';
    }
}
