<?php

namespace App\Filament\Resources\CaseStudyHeroSections\Pages;

use App\Filament\Resources\CaseStudyHeroSections\CaseStudyHeroSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCaseStudyHeroSections extends ListRecords
{
    protected static string $resource = CaseStudyHeroSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
