<?php

namespace App\Filament\Resources\BlogSections\Pages;

use App\Filament\Resources\BlogSections\BlogSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBlogSections extends ListRecords
{
    protected static string $resource = BlogSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
