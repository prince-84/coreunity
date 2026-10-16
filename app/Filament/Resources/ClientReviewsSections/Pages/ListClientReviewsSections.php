<?php

namespace App\Filament\Resources\ClientReviewsSections\Pages;

use App\Filament\Resources\ClientReviewsSections\ClientReviewsSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListClientReviewsSections extends ListRecords
{
    protected static string $resource = ClientReviewsSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
