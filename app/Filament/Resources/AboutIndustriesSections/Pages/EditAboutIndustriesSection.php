<?php

namespace App\Filament\Resources\AboutIndustriesSections\Pages;

use App\Filament\Resources\AboutIndustriesSections\AboutIndustriesSectionResource;
use Filament\Resources\Pages\EditRecord;

class EditAboutIndustriesSection extends EditRecord
{
    protected static string $resource = AboutIndustriesSectionResource::class;

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
