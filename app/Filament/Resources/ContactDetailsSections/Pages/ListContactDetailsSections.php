<?php

namespace App\Filament\Resources\ContactDetailsSections\Pages;

use App\Filament\Resources\ContactDetailsSections\ContactDetailsSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListContactDetailsSections extends ListRecords
{
    protected static string $resource = ContactDetailsSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
