<?php

namespace App\Filament\Resources\ServicesSmmSections\Pages;

use App\Filament\Resources\ServicesSmmSections\ServicesSmmSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditServicesSmmSection extends EditRecord
{
    protected static string $resource = ServicesSmmSectionResource::class;

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
