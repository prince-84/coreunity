<?php

namespace App\Filament\Resources\TestimonialSections\Pages;

use App\Filament\Resources\TestimonialSections\TestimonialSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTestimonialSection extends EditRecord
{
    protected static string $resource = TestimonialSectionResource::class;

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
