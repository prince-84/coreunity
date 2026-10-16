<?php

namespace App\Filament\Resources\BlogSections\Pages;

use App\Filament\Resources\BlogSections\BlogSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBlogSection extends EditRecord
{
    protected static string $resource = BlogSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('edit', ['record' => $this->record]);
    }
}
