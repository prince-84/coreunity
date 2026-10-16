<?php

namespace App\Filament\Resources\ContactDetailsSections;

use App\Filament\Resources\ContactDetailsSections\Pages\EditContactDetailsSection;
use App\Filament\Resources\ContactDetailsSections\Pages\ListContactDetailsSections;
use App\Filament\Resources\ContactDetailsSections\Schemas\ContactDetailsSectionForm;
use App\Filament\Resources\ContactDetailsSections\Tables\ContactDetailsSectionsTable;
use App\Models\ContactDetailsSection;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class ContactDetailsSectionResource extends Resource
{
    protected static ?string $model = ContactDetailsSection::class;

    protected static string|UnitEnum|null $navigationGroup = 'Blog & Contact';

    protected static ?int $navigationSort = 3;

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $modelLabel = 'Contact Details & Form Section';

    protected static ?string $pluralModelLabel = 'Contact Details & Form Sections';

    protected static ?string $recordTitleAttribute = null;

    public static function form(Schema $schema): Schema
    {
        return ContactDetailsSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContactDetailsSectionsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListContactDetailsSections::route('/'),
            'edit' => EditContactDetailsSection::route('/{record}/edit'),
        ];
    }
}
