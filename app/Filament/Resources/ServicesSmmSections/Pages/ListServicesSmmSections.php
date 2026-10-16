<?php

namespace App\Filament\Resources\ServicesSmmSections\Pages;

use App\Filament\Resources\ServicesSmmSections\ServicesSmmSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListServicesSmmSections extends ListRecords
{
    protected static string $resource = ServicesSmmSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
