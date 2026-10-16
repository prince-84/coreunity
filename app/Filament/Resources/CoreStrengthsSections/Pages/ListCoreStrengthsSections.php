<?php

namespace App\Filament\Resources\CoreStrengthsSections\Pages;

use App\Filament\Resources\CoreStrengthsSections\CoreStrengthsSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCoreStrengthsSections extends ListRecords
{
    protected static string $resource = CoreStrengthsSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
