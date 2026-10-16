<?php

namespace App\Filament\Resources\AboutIntroSections;

use App\Filament\Resources\AboutIntroSections\Pages\EditAboutIntroSection;
use App\Filament\Resources\AboutIntroSections\Pages\ListAboutIntroSections;
use App\Filament\Resources\AboutIntroSections\Schemas\AboutIntroSectionForm;
use App\Filament\Resources\AboutIntroSections\Tables\AboutIntroSectionsTable;
use App\Models\AboutIntroSection;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class AboutIntroSectionResource extends Resource
{
    protected static ?string $model = AboutIntroSection::class;

    protected static string|UnitEnum|null $navigationGroup = 'About Page';

    protected static ?int $navigationSort = 2;

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $modelLabel = 'About Intro Section';

    protected static ?string $pluralModelLabel = 'About Intro Sections';

    protected static ?string $recordTitleAttribute = null;

    public static function form(Schema $schema): Schema
    {
        return AboutIntroSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutIntroSectionsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAboutIntroSections::route('/'),
            'edit' => EditAboutIntroSection::route('/{record}/edit'),
        ];
    }
}
