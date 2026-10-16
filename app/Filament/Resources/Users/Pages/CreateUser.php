<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function afterCreate(): void
    {
        $user = $this->record;
        $selectedPermissions = [];

        foreach (UserResource::getPermissionModules() as $moduleKey => $moduleInfo) {
            $perms = $this->data["permissions_{$moduleKey}"] ?? [];
            if (is_array($perms)) {
                $selectedPermissions = array_merge($selectedPermissions, $perms);
            }
        }

        if (!empty($selectedPermissions)) {
            $user->syncPermissions($selectedPermissions);
        }
    }
}
