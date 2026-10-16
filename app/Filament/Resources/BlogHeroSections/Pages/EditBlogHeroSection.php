<?php

namespace App\Filament\Resources\BlogHeroSections\Pages;

use App\Filament\Resources\BlogHeroSections\BlogHeroSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBlogHeroSection extends EditRecord
{
    protected static string $resource = BlogHeroSectionResource::class;

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
