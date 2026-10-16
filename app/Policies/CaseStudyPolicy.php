<?php

namespace App\Policies;

class CaseStudyPolicy extends BaseResourcePolicy
{
    protected function permissionPrefix(): string
    {
        return 'case_studies';
    }
}
