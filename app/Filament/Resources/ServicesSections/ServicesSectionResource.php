<?php

namespace App\Filament\Resources\ServicesSections;

use App\Filament\Resources\ServicesSections\Pages\CreateServicesSection;
use App\Filament\Resources\ServicesSections\Pages\EditServicesSection;
use App\Filament\Resources\ServicesSections\Pages\ListServicesSections;
use App\Filament\Resources\ServicesSections\Schemas\ServicesSectionForm;
use App\Filament\Resources\ServicesSections\Tables\ServicesSectionsTable;
use App\Models\ServicesSection;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ServicesSectionResource extends Resource
{
    protected static ?string $model = ServicesSection::class;

    protected static string|UnitEnum|null $navigationGroup = 'Home Page';

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $modelLabel = 'Services Section';

    protected static ?string $pluralModelLabel = 'Services Sections';

    protected static ?int $navigationSort = 3;

    protected static ?string $recordTitleAttribute = null;

    public static function form(Schema $schema): Schema
    {
        return ServicesSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ServicesSectionsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListServicesSections::route('/'),
            'create' => CreateServicesSection::route('/create'),
            'edit' => EditServicesSection::route('/{record}/edit'),
        ];
    }
}
