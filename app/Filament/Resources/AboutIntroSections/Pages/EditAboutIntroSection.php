<?php

namespace App\Filament\Resources\AboutIntroSections\Pages;

use App\Filament\Resources\AboutIntroSections\AboutIntroSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutIntroSection extends EditRecord
{
    protected static string $resource = AboutIntroSectionResource::class;

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
