<?php

namespace App\Filament\Resources\ContactDetailsSections\Pages;

use App\Filament\Resources\ContactDetailsSections\ContactDetailsSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditContactDetailsSection extends EditRecord
{
    protected static string $resource = ContactDetailsSectionResource::class;

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
