<?php

namespace App\Filament\Resources\ServicesHeroSections\Pages;

use App\Filament\Resources\ServicesHeroSections\ServicesHeroSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListServicesHeroSections extends ListRecords
{
    protected static string $resource = ServicesHeroSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
