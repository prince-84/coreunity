<?php

namespace App\Policies;

class TestimonialSectionPolicy extends BaseResourcePolicy
{
    protected function permissionPrefix(): string
    {
        return 'testimonials';
    }
}
