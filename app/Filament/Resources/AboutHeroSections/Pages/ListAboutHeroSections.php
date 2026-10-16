<?php

namespace App\Filament\Resources\AboutHeroSections\Pages;

use App\Filament\Resources\AboutHeroSections\AboutHeroSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAboutHeroSections extends ListRecords
{
    protected static string $resource = AboutHeroSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
