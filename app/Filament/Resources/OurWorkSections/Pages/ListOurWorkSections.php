<?php

namespace App\Filament\Resources\OurWorkSections\Pages;

use App\Filament\Resources\OurWorkSections\OurWorkSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOurWorkSections extends ListRecords
{
    protected static string $resource = OurWorkSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
