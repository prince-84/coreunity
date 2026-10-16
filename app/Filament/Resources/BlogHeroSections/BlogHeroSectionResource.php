<?php

namespace App\Filament\Resources\BlogHeroSections;

use App\Filament\Resources\BlogHeroSections\Pages\EditBlogHeroSection;
use App\Filament\Resources\BlogHeroSections\Pages\ListBlogHeroSections;
use App\Filament\Resources\BlogHeroSections\Schemas\BlogHeroSectionForm;
use App\Filament\Resources\BlogHeroSections\Tables\BlogHeroSectionsTable;
use App\Models\BlogHeroSection;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class BlogHeroSectionResource extends Resource
{
    protected static ?string $model = BlogHeroSection::class;

    protected static string|UnitEnum|null $navigationGroup = 'Blog & Contact';

    protected static ?int $navigationSort = 1;

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $modelLabel = 'Blog Hero Section';

    protected static ?string $pluralModelLabel = 'Blog Hero Sections';

    protected static ?string $recordTitleAttribute = null;

    public static function form(Schema $schema): Schema
    {
        return BlogHeroSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BlogHeroSectionsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBlogHeroSections::route('/'),
            'edit' => EditBlogHeroSection::route('/{record}/edit'),
        ];
    }
}
