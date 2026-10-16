<?php

namespace App\Filament\Resources\ServicesListSections\Pages;

use App\Filament\Resources\ServicesListSections\ServicesListSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListServicesListSections extends ListRecords
{
    protected static string $resource = ServicesListSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
