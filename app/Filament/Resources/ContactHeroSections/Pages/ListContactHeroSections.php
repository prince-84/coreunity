<?php

namespace App\Filament\Resources\ContactHeroSections\Pages;

use App\Filament\Resources\ContactHeroSections\ContactHeroSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListContactHeroSections extends ListRecords
{
    protected static string $resource = ContactHeroSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
