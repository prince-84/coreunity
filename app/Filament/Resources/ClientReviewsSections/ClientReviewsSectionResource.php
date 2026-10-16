<?php

namespace App\Filament\Resources\ClientReviewsSections;

use App\Filament\Resources\ClientReviewsSections\Pages\EditClientReviewsSection;
use App\Filament\Resources\ClientReviewsSections\Pages\ListClientReviewsSections;
use App\Filament\Resources\ClientReviewsSections\Schemas\ClientReviewsSectionForm;
use App\Filament\Resources\ClientReviewsSections\Tables\ClientReviewsSectionsTable;
use App\Models\ClientReviewsSection;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ClientReviewsSectionResource extends Resource
{
    protected static ?string $model = ClientReviewsSection::class;

    protected static bool $shouldRegisterNavigation = true;

    protected static string|UnitEnum|null $navigationGroup = 'Home Page';

    protected static ?string $navigationLabel = 'Client Reviews (Marquee)';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Star;

    protected static ?int $navigationSort = 7;

    protected static ?string $modelLabel = 'Client Reviews Section';

    protected static ?string $pluralModelLabel = 'Client Reviews Sections';

    protected static ?string $recordTitleAttribute = null;

    public static function form(Schema $schema): Schema
    {
        return ClientReviewsSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ClientReviewsSectionsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListClientReviewsSections::route('/'),
            'edit' => EditClientReviewsSection::route('/{record}/edit'),
        ];
    }
}
