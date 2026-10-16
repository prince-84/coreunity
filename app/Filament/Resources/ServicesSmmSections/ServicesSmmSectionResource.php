<?php

namespace App\Filament\Resources\ServicesSmmSections;

use App\Filament\Resources\ServicesSmmSections\Pages\EditServicesSmmSection;
use App\Filament\Resources\ServicesSmmSections\Pages\ListServicesSmmSections;
use App\Filament\Resources\ServicesSmmSections\Schemas\ServicesSmmSectionForm;
use App\Filament\Resources\ServicesSmmSections\Tables\ServicesSmmSectionsTable;
use App\Models\ServicesSmmSection;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class ServicesSmmSectionResource extends Resource
{
    protected static ?string $model = ServicesSmmSection::class;

    protected static string|UnitEnum|null $navigationGroup = 'Services Page';

    protected static ?int $navigationSort = 4;

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $modelLabel = 'Services SMM Section';

    protected static ?string $pluralModelLabel = 'Services SMM Sections';

    protected static ?string $recordTitleAttribute = null;

    public static function form(Schema $schema): Schema
    {
        return ServicesSmmSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ServicesSmmSectionsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListServicesSmmSections::route('/'),
            'edit' => EditServicesSmmSection::route('/{record}/edit'),
        ];
    }
}
