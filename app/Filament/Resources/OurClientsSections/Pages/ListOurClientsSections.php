<?php

namespace App\Filament\Resources\OurClientsSections\Pages;

use App\Filament\Resources\OurClientsSections\OurClientsSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOurClientsSections extends ListRecords
{
    protected static string $resource = OurClientsSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
