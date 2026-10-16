<?php

namespace App\Policies;

class PageSectionPolicy extends BaseResourcePolicy
{
    protected function permissionPrefix(): string
    {
        return 'page_sections';
    }
}
