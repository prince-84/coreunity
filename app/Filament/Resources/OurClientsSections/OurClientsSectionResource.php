<?php

namespace App\Filament\Resources\OurClientsSections;

use App\Filament\Resources\OurClientsSections\Pages\EditOurClientsSection;
use App\Filament\Resources\OurClientsSections\Pages\ListOurClientsSections;
use App\Filament\Resources\OurClientsSections\Schemas\OurClientsSectionForm;
use App\Filament\Resources\OurClientsSections\Tables\OurClientsSectionsTable;
use App\Models\OurClientsSection;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OurClientsSectionResource extends Resource
{
    protected static ?string $model = OurClientsSection::class;

    protected static bool $shouldRegisterNavigation = true;

    protected static string|UnitEnum|null $navigationGroup = 'Home Page';

    protected static ?string $navigationLabel = 'Our Clients Logos';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::BuildingOffice2;

    protected static ?int $navigationSort = 6;

    protected static ?string $modelLabel = 'Our Clients Section';

    protected static ?string $pluralModelLabel = 'Our Clients Sections';

    protected static ?string $recordTitleAttribute = null;

    public static function form(Schema $schema): Schema
    {
        return OurClientsSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OurClientsSectionsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListOurClientsSections::route('/'),
            'edit' => EditOurClientsSection::route('/{record}/edit'),
        ];
    }
}
