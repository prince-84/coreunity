<?php

namespace App\Filament\Resources\BlogHeroSections\Pages;

use App\Filament\Resources\BlogHeroSections\BlogHeroSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBlogHeroSections extends ListRecords
{
    protected static string $resource = BlogHeroSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
