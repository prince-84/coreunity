<?php

namespace App\Filament\Resources\ContactHeroSections\Pages;

use App\Filament\Resources\ContactHeroSections\ContactHeroSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditContactHeroSection extends EditRecord
{
    protected static string $resource = ContactHeroSectionResource::class;

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
