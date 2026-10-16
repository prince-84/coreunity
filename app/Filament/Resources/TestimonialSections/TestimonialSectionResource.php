<?php

namespace App\Filament\Resources\TestimonialSections;

use App\Filament\Resources\TestimonialSections\Pages\EditTestimonialSection;
use App\Filament\Resources\TestimonialSections\Pages\ListTestimonialSections;
use App\Filament\Resources\TestimonialSections\Schemas\TestimonialSectionForm;
use App\Filament\Resources\TestimonialSections\Tables\TestimonialSectionsTable;
use App\Models\TestimonialSection;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TestimonialSectionResource extends Resource
{
    protected static ?string $model = TestimonialSection::class;

    protected static bool $shouldRegisterNavigation = true;

    protected static string|UnitEnum|null $navigationGroup = 'Global Section';

    protected static ?string $navigationLabel = 'Testimonials';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::ChatBubbleLeftRight;

    protected static ?int $navigationSort = 6;

    protected static ?string $modelLabel = 'Testimonial Section';

    protected static ?string $pluralModelLabel = 'Testimonial Sections';

    protected static ?string $recordTitleAttribute = null;

    public static function form(Schema $schema): Schema
    {
        return TestimonialSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TestimonialSectionsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTestimonialSections::route('/'),
            'edit' => EditTestimonialSection::route('/{record}/edit'),
        ];
    }
}
