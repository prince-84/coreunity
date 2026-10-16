<?php

namespace App\Filament\Resources\AboutIndustriesSections\Pages;

use App\Filament\Resources\AboutIndustriesSections\AboutIndustriesSectionResource;
use Filament\Resources\Pages\ListRecords;

class ListAboutIndustriesSections extends ListRecords
{
    protected static string $resource = AboutIndustriesSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }
}
