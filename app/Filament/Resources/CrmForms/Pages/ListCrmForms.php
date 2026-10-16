<?php

namespace App\Filament\Resources\CrmForms\Pages;

use App\Filament\Resources\CrmForms\CrmFormResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCrmForms extends ListRecords
{
    protected static string $resource = CrmFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('New Form Entry'),
        ];
    }
}
