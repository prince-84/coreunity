<?php

namespace App\Filament\Resources\AboutValuesSections;

use App\Filament\Resources\AboutValuesSections\Pages\EditAboutValuesSection;
use App\Filament\Resources\AboutValuesSections\Pages\ListAboutValuesSections;
use App\Filament\Resources\AboutValuesSections\Schemas\AboutValuesSectionForm;
use App\Filament\Resources\AboutValuesSections\Tables\AboutValuesSectionsTable;
use App\Models\AboutValuesSection;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class AboutValuesSectionResource extends Resource
{
    protected static ?string $model = AboutValuesSection::class;

    protected static string|UnitEnum|null $navigationGroup = 'About Page';

    protected static ?int $navigationSort = 3;

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $modelLabel = 'What Drives Us Forward Section';

    protected static ?string $pluralModelLabel = 'What Drives Us Forward Sections';

    protected static ?string $recordTitleAttribute = null;

    public static function canCreate(): bool
    {
        return static::getModel()::count() === 0;
    }

    public static function form(Schema $schema): Schema
    {
        return AboutValuesSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutValuesSectionsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAboutValuesSections::route('/'),
            'edit' => EditAboutValuesSection::route('/{record}/edit'),
        ];
    }
}
