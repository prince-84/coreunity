<?php

namespace App\Filament\Resources\CaseStudyHeroSections;

use App\Filament\Resources\CaseStudyHeroSections\Pages\EditCaseStudyHeroSection;
use App\Filament\Resources\CaseStudyHeroSections\Pages\ListCaseStudyHeroSections;
use App\Filament\Resources\CaseStudyHeroSections\Schemas\CaseStudyHeroSectionForm;
use App\Filament\Resources\CaseStudyHeroSections\Tables\CaseStudyHeroSectionsTable;
use App\Models\CaseStudyHeroSection;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class CaseStudyHeroSectionResource extends Resource
{
    protected static ?string $model = CaseStudyHeroSection::class;

    protected static string|UnitEnum|null $navigationGroup = 'Content';

    protected static ?int $navigationSort = 5;

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $modelLabel = 'Case Study Hero Section';

    protected static ?string $pluralModelLabel = 'Case Study Hero Sections';

    protected static ?string $recordTitleAttribute = null;

    public static function form(Schema $schema): Schema
    {
        return CaseStudyHeroSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CaseStudyHeroSectionsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCaseStudyHeroSections::route('/'),
            'edit' => EditCaseStudyHeroSection::route('/{record}/edit'),
        ];
    }
}
