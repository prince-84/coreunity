<?php

namespace App\Policies;

class FormSubmissionPolicy extends BaseResourcePolicy
{
    protected function permissionPrefix(): string
    {
        return 'crm';
    }
}
