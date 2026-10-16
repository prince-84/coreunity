<?php

namespace App\Filament\Resources\TeamSections\Pages;

use App\Filament\Resources\TeamSections\TeamSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTeamSections extends ListRecords
{
    protected static string $resource = TeamSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
