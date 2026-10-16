<?php

namespace App\Filament\Resources\CaseStudyHeroSections\Pages;

use App\Filament\Resources\CaseStudyHeroSections\CaseStudyHeroSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCaseStudyHeroSection extends EditRecord
{
    protected static string $resource = CaseStudyHeroSectionResource::class;

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
