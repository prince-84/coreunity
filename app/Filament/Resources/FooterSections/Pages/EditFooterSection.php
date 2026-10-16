<?php

namespace App\Filament\Resources\FooterSections\Pages;

use App\Filament\Resources\FooterSections\FooterSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFooterSection extends EditRecord
{
    protected static string $resource = FooterSectionResource::class;

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
