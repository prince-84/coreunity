<?php

namespace App\Filament\Resources\ServicesIndustriesSections;

use App\Filament\Resources\ServicesIndustriesSections\Pages\EditServicesIndustriesSection;
use App\Filament\Resources\ServicesIndustriesSections\Pages\ListServicesIndustriesSections;
use App\Filament\Resources\ServicesIndustriesSections\Schemas\ServicesIndustriesSectionForm;
use App\Filament\Resources\ServicesIndustriesSections\Tables\ServicesIndustriesSectionsTable;
use App\Models\ServicesIndustriesSection;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class ServicesIndustriesSectionResource extends Resource
{
    protected static ?string $model = ServicesIndustriesSection::class;

    protected static string|UnitEnum|null $navigationGroup = 'Services Page';

    protected static ?int $navigationSort = 3;

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $modelLabel = 'Services Industries Section';

    protected static ?string $pluralModelLabel = 'Services Industries Sections';

    protected static ?string $recordTitleAttribute = null;

    public static function form(Schema $schema): Schema
    {
        return ServicesIndustriesSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ServicesIndustriesSectionsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListServicesIndustriesSections::route('/'),
            'edit' => EditServicesIndustriesSection::route('/{record}/edit'),
        ];
    }
}
