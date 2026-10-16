<?php

namespace App\Filament\Resources\AboutValuesSections\Pages;

use App\Filament\Resources\AboutValuesSections\AboutValuesSectionResource;
use Filament\Resources\Pages\EditRecord;

class EditAboutValuesSection extends EditRecord
{
    protected static string $resource = AboutValuesSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('edit', ['record' => $this->getRecord()]);
    }
}
