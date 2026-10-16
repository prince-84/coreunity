<?php

namespace App\Filament\Resources\AboutHeroSections;

use App\Filament\Resources\AboutHeroSections\Pages\EditAboutHeroSection;
use App\Filament\Resources\AboutHeroSections\Pages\ListAboutHeroSections;
use App\Filament\Resources\AboutHeroSections\Schemas\AboutHeroSectionForm;
use App\Filament\Resources\AboutHeroSections\Tables\AboutHeroSectionsTable;
use App\Models\AboutHeroSection;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class AboutHeroSectionResource extends Resource
{
    protected static ?string $model = AboutHeroSection::class;

    protected static string|UnitEnum|null $navigationGroup = 'About Page';

    protected static ?int $navigationSort = 1;

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $modelLabel = 'About Hero Section';

    protected static ?string $pluralModelLabel = 'About Hero Sections';

    protected static ?string $recordTitleAttribute = null;

    public static function form(Schema $schema): Schema
    {
        return AboutHeroSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutHeroSectionsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAboutHeroSections::route('/'),
            'edit' => EditAboutHeroSection::route('/{record}/edit'),
        ];
    }
}
