<?php

namespace App\Filament\Resources\ServicesSections\Pages;

use App\Filament\Resources\ServicesSections\ServicesSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListServicesSections extends ListRecords
{
    protected static string $resource = ServicesSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
