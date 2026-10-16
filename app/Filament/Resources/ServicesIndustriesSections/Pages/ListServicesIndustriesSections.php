<?php

namespace App\Filament\Resources\ServicesIndustriesSections\Pages;

use App\Filament\Resources\ServicesIndustriesSections\ServicesIndustriesSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListServicesIndustriesSections extends ListRecords
{
    protected static string $resource = ServicesIndustriesSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
