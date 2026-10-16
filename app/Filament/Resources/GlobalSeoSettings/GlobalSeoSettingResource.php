<?php

namespace App\Filament\Resources\GlobalSeoSettings;

use App\Filament\Resources\GlobalSeoSettings\Pages\EditGlobalSeoSetting;
use App\Filament\Resources\GlobalSeoSettings\Pages\ListGlobalSeoSettings;
use App\Filament\Resources\GlobalSeoSettings\Schemas\GlobalSeoSettingForm;
use App\Filament\Resources\GlobalSeoSettings\Tables\GlobalSeoSettingsTable;
use App\Models\GlobalSeoSetting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class GlobalSeoSettingResource extends Resource
{
    protected static ?string $model = GlobalSeoSetting::class;

    protected static bool $shouldRegisterNavigation = true;

    protected static string|UnitEnum|null $navigationGroup = 'Site Settings';

    protected static ?string $navigationLabel = 'Global SEO & Indexing';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::GlobeAlt;

    protected static ?int $navigationSort = 1;

    protected static ?string $modelLabel = 'Global SEO Setting';

    protected static ?string $pluralModelLabel = 'Global SEO Settings';

    public static function form(Schema $schema): Schema
    {
        return GlobalSeoSettingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GlobalSeoSettingsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListGlobalSeoSettings::route('/'),
            'edit' => EditGlobalSeoSetting::route('/{record}/edit'),
        ];
    }
}
