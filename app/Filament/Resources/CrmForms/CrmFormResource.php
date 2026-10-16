<?php

namespace App\Filament\Resources\CrmForms;

use App\Filament\Resources\CrmForms\Pages\CreateCrmForm;
use App\Filament\Resources\CrmForms\Pages\EditCrmForm;
use App\Filament\Resources\CrmForms\Pages\ListCrmForms;
use App\Filament\Resources\CrmForms\Schemas\CrmFormSchema;
use App\Filament\Resources\CrmForms\Tables\CrmFormsTable;
use App\Models\CrmForm;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class CrmFormResource extends Resource
{
    protected static ?string $model = CrmForm::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::InboxStack;

    protected static string|UnitEnum|null $navigationGroup = 'Content';

    protected static ?string $navigationLabel = 'CRM (Forms List)';

    protected static ?string $modelLabel = 'CRM Form';

    protected static ?string $pluralModelLabel = 'CRM Forms';

    protected static ?int $navigationSort = 6;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return CrmFormSchema::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CrmFormsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCrmForms::route('/'),
            'create' => CreateCrmForm::route('/create'),
        ];
    }
}
