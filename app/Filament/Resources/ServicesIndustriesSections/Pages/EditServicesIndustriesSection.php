<?php

namespace App\Filament\Resources\ServicesIndustriesSections\Pages;

use App\Filament\Resources\ServicesIndustriesSections\ServicesIndustriesSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditServicesIndustriesSection extends EditRecord
{
    protected static string $resource = ServicesIndustriesSectionResource::class;

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
