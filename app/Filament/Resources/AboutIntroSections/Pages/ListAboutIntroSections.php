<?php

namespace App\Filament\Resources\AboutIntroSections\Pages;

use App\Filament\Resources\AboutIntroSections\AboutIntroSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAboutIntroSections extends ListRecords
{
    protected static string $resource = AboutIntroSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
