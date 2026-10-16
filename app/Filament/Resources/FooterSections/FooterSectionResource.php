<?php

namespace App\Filament\Resources\FooterSections;

use App\Filament\Resources\FooterSections\Pages\EditFooterSection;
use App\Filament\Resources\FooterSections\Pages\ListFooterSections;
use App\Filament\Resources\FooterSections\Schemas\FooterSectionForm;
use App\Filament\Resources\FooterSections\Tables\FooterSectionsTable;
use App\Models\FooterSection;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FooterSectionResource extends Resource
{
    protected static ?string $model = FooterSection::class;

    protected static bool $shouldRegisterNavigation = true;

    protected static string|UnitEnum|null $navigationGroup = 'Site Settings';

    protected static ?string $navigationLabel = 'Footer & Newsletter';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::RectangleGroup;

    protected static ?int $navigationSort = 2;

    protected static ?string $modelLabel = 'Footer Section';

    protected static ?string $pluralModelLabel = 'Footer Sections';

    protected static ?string $recordTitleAttribute = null;

    public static function form(Schema $schema): Schema
    {
        return FooterSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FooterSectionsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListFooterSections::route('/'),
            'edit' => EditFooterSection::route('/{record}/edit'),
        ];
    }
}
