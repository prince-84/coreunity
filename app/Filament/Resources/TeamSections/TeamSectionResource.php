<?php

namespace App\Filament\Resources\TeamSections;

use App\Filament\Resources\TeamSections\Pages\EditTeamSection;
use App\Filament\Resources\TeamSections\Pages\ListTeamSections;
use App\Filament\Resources\TeamSections\Schemas\TeamSectionForm;
use App\Filament\Resources\TeamSections\Tables\TeamSectionsTable;
use App\Models\TeamSection;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TeamSectionResource extends Resource
{
    protected static ?string $model = TeamSection::class;

    protected static bool $shouldRegisterNavigation = true;

    protected static string|UnitEnum|null $navigationGroup = 'Global Section';

    protected static ?string $navigationLabel = 'Team Members';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::UserGroup;

    protected static ?int $navigationSort = 5;

    protected static ?string $modelLabel = 'Team Section';

    protected static ?string $pluralModelLabel = 'Team Sections';

    protected static ?string $recordTitleAttribute = null;

    public static function form(Schema $schema): Schema
    {
        return TeamSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TeamSectionsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTeamSections::route('/'),
            'edit' => EditTeamSection::route('/{record}/edit'),
        ];
    }
}
