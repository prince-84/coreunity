<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->hidden(fn ($record) => $record->id === auth()->id() || $record->hasRole('Super Admin')),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $user = $this->record;
        $userPermissions = $user->permissions->pluck('name')->toArray();

        foreach (UserResource::getPermissionModules() as $moduleKey => $moduleInfo) {
            $data["permissions_{$moduleKey}"] = array_values(array_filter($userPermissions, function ($perm) use ($moduleKey) {
                return str_ends_with($perm, "_{$moduleKey}");
            }));
        }

        return $data;
    }

    protected function afterSave(): void
    {
        $user = $this->record;
        $selectedPermissions = [];

        foreach (UserResource::getPermissionModules() as $moduleKey => $moduleInfo) {
            $perms = $this->data["permissions_{$moduleKey}"] ?? [];
            if (is_array($perms)) {
                $selectedPermissions = array_merge($selectedPermissions, $perms);
            }
        }

        $user->syncPermissions($selectedPermissions);
    }
}
