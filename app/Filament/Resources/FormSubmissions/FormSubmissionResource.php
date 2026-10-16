<?php

namespace App\Filament\Resources\FormSubmissions;

use App\Filament\Resources\FormSubmissions\Pages\ListFormSubmissions;
use App\Filament\Resources\FormSubmissions\Schemas\FormSubmissionForm;
use App\Filament\Resources\FormSubmissions\Tables\FormSubmissionsTable;
use App\Models\FormSubmission;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class FormSubmissionResource extends Resource
{
    protected static ?string $model = FormSubmission::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::ChatBubbleLeftRight;

    protected static string|UnitEnum|null $navigationGroup = 'Content';

    protected static ?string $navigationLabel = 'All Submissions / Leads';

    protected static ?string $modelLabel = 'Lead Submission';

    protected static ?string $pluralModelLabel = 'Lead Submissions';

    protected static ?int $navigationSort = 7;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return FormSubmissionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FormSubmissionsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListFormSubmissions::route('/'),
        ];
    }
}
