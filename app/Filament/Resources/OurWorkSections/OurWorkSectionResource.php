<?php

namespace App\Filament\Resources\OurWorkSections;

use App\Filament\Resources\OurWorkSections\Pages\EditOurWorkSection;
use App\Filament\Resources\OurWorkSections\Pages\ListOurWorkSections;
use App\Filament\Resources\OurWorkSections\Schemas\OurWorkSectionForm;
use App\Filament\Resources\OurWorkSections\Tables\OurWorkSectionsTable;
use App\Models\OurWorkSection;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OurWorkSectionResource extends Resource
{
    protected static ?string $model = OurWorkSection::class;

    protected static bool $shouldRegisterNavigation = true;

    protected static string|UnitEnum|null $navigationGroup = 'Global Section';

    protected static ?string $navigationLabel = 'Our Work Showcase';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Briefcase;

    protected static ?int $navigationSort = 1;

    protected static ?string $modelLabel = 'Our Work Section';

    protected static ?string $pluralModelLabel = 'Our Work Sections';

    protected static ?string $recordTitleAttribute = null;

    public static function form(Schema $schema): Schema
    {
        return OurWorkSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OurWorkSectionsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListOurWorkSections::route('/'),
            'edit' => EditOurWorkSection::route('/{record}/edit'),
        ];
    }
}
