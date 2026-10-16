<?php

namespace App\Filament\Resources\AboutIndustriesSections;

use App\Filament\Resources\AboutIndustriesSections\Pages\EditAboutIndustriesSection;
use App\Filament\Resources\AboutIndustriesSections\Pages\ListAboutIndustriesSections;
use App\Filament\Resources\AboutIndustriesSections\Schemas\AboutIndustriesSectionForm;
use App\Filament\Resources\AboutIndustriesSections\Tables\AboutIndustriesSectionsTable;
use App\Models\AboutIndustriesSection;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class AboutIndustriesSectionResource extends Resource
{
    protected static ?string $model = AboutIndustriesSection::class;

    protected static string|UnitEnum|null $navigationGroup = 'About Page';

    protected static ?int $navigationSort = 4;

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $modelLabel = 'Industries We Serve Section';

    protected static ?string $pluralModelLabel = 'Industries We Serve Sections';

    protected static ?string $recordTitleAttribute = null;

    public static function canCreate(): bool
    {
        return static::getModel()::count() === 0;
    }

    public static function form(Schema $schema): Schema
    {
        return AboutIndustriesSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutIndustriesSectionsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAboutIndustriesSections::route('/'),
            'edit' => EditAboutIndustriesSection::route('/{record}/edit'),
        ];
    }
}
