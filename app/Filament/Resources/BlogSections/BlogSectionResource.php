<?php

namespace App\Filament\Resources\BlogSections;

use App\Filament\Resources\BlogSections\Pages\EditBlogSection;
use App\Filament\Resources\BlogSections\Pages\ListBlogSections;
use App\Filament\Resources\BlogSections\Schemas\BlogSectionForm;
use App\Filament\Resources\BlogSections\Tables\BlogSectionsTable;
use App\Models\BlogSection;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BlogSectionResource extends Resource
{
    protected static ?string $model = BlogSection::class;

    protected static bool $shouldRegisterNavigation = true;

    protected static string|UnitEnum|null $navigationGroup = 'Home Page';

    protected static ?string $navigationLabel = 'Blog Showcase Section';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Newspaper;

    protected static ?int $navigationSort = 8;

    protected static ?string $modelLabel = 'Blog Section';

    protected static ?string $pluralModelLabel = 'Blog Sections';

    protected static ?string $recordTitleAttribute = null;

    public static function form(Schema $schema): Schema
    {
        return BlogSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BlogSectionsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBlogSections::route('/'),
            'edit' => EditBlogSection::route('/{record}/edit'),
        ];
    }
}
