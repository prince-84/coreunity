<?php

namespace App\Filament\Resources\ServicesListSections\Pages;

use App\Filament\Resources\ServicesListSections\ServicesListSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditServicesListSection extends EditRecord
{
    protected static string $resource = ServicesListSectionResource::class;

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
