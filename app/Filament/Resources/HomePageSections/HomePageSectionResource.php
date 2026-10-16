<?php

namespace App\Filament\Resources\HomePageSections;

use App\Filament\Resources\HomePageSections\Pages\ListHomePageSections;
use App\Filament\Resources\HomePageSections\Tables\HomePageSectionsTable;
use App\Models\HomePageSection;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HomePageSectionResource extends Resource
{
    protected static ?string $model = HomePageSection::class;

    protected static string|UnitEnum|null $navigationGroup = 'Home Page';

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $modelLabel = 'Home Section';

    protected static ?string $pluralModelLabel = 'Home Page Sections';

    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = 'name';

    public static function table(Table $table): Table
    {
        return HomePageSectionsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListHomePageSections::route('/'),
        ];
    }
}
