<?php

namespace App\Policies;

class PagePolicy extends BaseResourcePolicy
{
    protected function permissionPrefix(): string
    {
        return 'pages';
    }
}
