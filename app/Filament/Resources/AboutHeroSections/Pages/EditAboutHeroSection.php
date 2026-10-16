<?php

namespace App\Filament\Resources\AboutHeroSections\Pages;

use App\Filament\Resources\AboutHeroSections\AboutHeroSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutHeroSection extends EditRecord
{
    protected static string $resource = AboutHeroSectionResource::class;

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
