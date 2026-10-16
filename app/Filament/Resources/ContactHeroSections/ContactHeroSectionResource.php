<?php

namespace App\Filament\Resources\ContactHeroSections;

use App\Filament\Resources\ContactHeroSections\Pages\EditContactHeroSection;
use App\Filament\Resources\ContactHeroSections\Pages\ListContactHeroSections;
use App\Filament\Resources\ContactHeroSections\Schemas\ContactHeroSectionForm;
use App\Filament\Resources\ContactHeroSections\Tables\ContactHeroSectionsTable;
use App\Models\ContactHeroSection;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class ContactHeroSectionResource extends Resource
{
    protected static ?string $model = ContactHeroSection::class;

    protected static string|UnitEnum|null $navigationGroup = 'Blog & Contact';

    protected static ?int $navigationSort = 2;

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $modelLabel = 'Contact Hero Section';

    protected static ?string $pluralModelLabel = 'Contact Hero Sections';

    protected static ?string $recordTitleAttribute = null;

    public static function form(Schema $schema): Schema
    {
        return ContactHeroSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContactHeroSectionsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListContactHeroSections::route('/'),
            'edit' => EditContactHeroSection::route('/{record}/edit'),
        ];
    }
}
