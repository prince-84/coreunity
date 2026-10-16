<?php

namespace App\Filament\Resources\ServicesListSections;

use App\Filament\Resources\ServicesListSections\Pages\EditServicesListSection;
use App\Filament\Resources\ServicesListSections\Pages\ListServicesListSections;
use App\Filament\Resources\ServicesListSections\Schemas\ServicesListSectionForm;
use App\Filament\Resources\ServicesListSections\Tables\ServicesListSectionsTable;
use App\Models\ServicesListSection;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class ServicesListSectionResource extends Resource
{
    protected static ?string $model = ServicesListSection::class;

    protected static string|UnitEnum|null $navigationGroup = 'Services Page';

    protected static ?int $navigationSort = 2;

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $modelLabel = 'Services List Section';

    protected static ?string $pluralModelLabel = 'Services List Sections';

    protected static ?string $recordTitleAttribute = null;

    public static function form(Schema $schema): Schema
    {
        return ServicesListSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ServicesListSectionsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListServicesListSections::route('/'),
            'edit' => EditServicesListSection::route('/{record}/edit'),
        ];
    }
}
