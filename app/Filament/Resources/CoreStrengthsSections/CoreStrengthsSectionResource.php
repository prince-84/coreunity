<?php

namespace App\Filament\Resources\CoreStrengthsSections;

use App\Filament\Resources\CoreStrengthsSections\Pages\EditCoreStrengthsSection;
use App\Filament\Resources\CoreStrengthsSections\Pages\ListCoreStrengthsSections;
use App\Filament\Resources\CoreStrengthsSections\Schemas\CoreStrengthsSectionForm;
use App\Filament\Resources\CoreStrengthsSections\Tables\CoreStrengthsSectionsTable;
use App\Models\CoreStrengthsSection;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class CoreStrengthsSectionResource extends Resource
{
    protected static ?string $model = CoreStrengthsSection::class;

    protected static string|UnitEnum|null $navigationGroup = 'Home Page';

    protected static ?int $navigationSort = 4;

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $modelLabel = 'Core Strengths Section';

    protected static ?string $pluralModelLabel = 'Core Strengths Sections';

    protected static ?string $recordTitleAttribute = null;

    public static function form(Schema $schema): Schema
    {
        return CoreStrengthsSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CoreStrengthsSectionsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCoreStrengthsSections::route('/'),
            'edit' => EditCoreStrengthsSection::route('/{record}/edit'),
        ];
    }
}
