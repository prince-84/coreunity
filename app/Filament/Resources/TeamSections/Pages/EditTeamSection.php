<?php

namespace App\Filament\Resources\TeamSections\Pages;

use App\Filament\Resources\TeamSections\TeamSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTeamSection extends EditRecord
{
    protected static string $resource = TeamSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('edit', ['record' => $this->record]);
    }
}
