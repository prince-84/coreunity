<?php

namespace App\Filament\Resources\ServicesHeroSections\Pages;

use App\Filament\Resources\ServicesHeroSections\ServicesHeroSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditServicesHeroSection extends EditRecord
{
    protected static string $resource = ServicesHeroSectionResource::class;

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
