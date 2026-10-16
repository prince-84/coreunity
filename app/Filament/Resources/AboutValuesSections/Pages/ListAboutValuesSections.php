<?php

namespace App\Filament\Resources\AboutValuesSections\Pages;

use App\Filament\Resources\AboutValuesSections\AboutValuesSectionResource;
use Filament\Resources\Pages\ListRecords;

class ListAboutValuesSections extends ListRecords
{
    protected static string $resource = AboutValuesSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }
}
