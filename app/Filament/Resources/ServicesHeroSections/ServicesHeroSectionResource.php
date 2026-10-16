<?php

namespace App\Filament\Resources\ServicesHeroSections;

use App\Filament\Resources\ServicesHeroSections\Pages\EditServicesHeroSection;
use App\Filament\Resources\ServicesHeroSections\Pages\ListServicesHeroSections;
use App\Filament\Resources\ServicesHeroSections\Schemas\ServicesHeroSectionForm;
use App\Filament\Resources\ServicesHeroSections\Tables\ServicesHeroSectionsTable;
use App\Models\ServicesHeroSection;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class ServicesHeroSectionResource extends Resource
{
    protected static ?string $model = ServicesHeroSection::class;

    protected static string|UnitEnum|null $navigationGroup = 'Services Page';

    protected static ?int $navigationSort = 1;

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $modelLabel = 'Services Hero Section';

    protected static ?string $pluralModelLabel = 'Services Hero Sections';

    protected static ?string $recordTitleAttribute = null;

    public static function form(Schema $schema): Schema
    {
        return ServicesHeroSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ServicesHeroSectionsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListServicesHeroSections::route('/'),
            'edit' => EditServicesHeroSection::route('/{record}/edit'),
        ];
    }
}
