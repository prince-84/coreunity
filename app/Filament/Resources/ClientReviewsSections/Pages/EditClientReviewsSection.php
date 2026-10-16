<?php

namespace App\Filament\Resources\ClientReviewsSections\Pages;

use App\Filament\Resources\ClientReviewsSections\ClientReviewsSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditClientReviewsSection extends EditRecord
{
    protected static string $resource = ClientReviewsSectionResource::class;

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
