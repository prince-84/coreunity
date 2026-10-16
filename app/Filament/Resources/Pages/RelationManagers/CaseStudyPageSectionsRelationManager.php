<?php

namespace App\Filament\Resources\Pages\RelationManagers;

use App\Models\CaseStudyPageSection;
use Filament\Actions\Action;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CaseStudyPageSectionsRelationManager extends RelationManager
{
    protected static string $relationship = 'caseStudyPageSections';

    protected static ?string $title = 'Case Study Page Sections';

    public static function canViewForRecord(\Illuminate\Database\Eloquent\Model $ownerRecord, string $pageClass): bool
    {
        return $ownerRecord->slug === 'case-study' || $ownerRecord->slug === 'portfolio';
    }

    public function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Section Details')
                ->description('Name, order, and visibility for this linked section.')
                ->columns(2)
                ->schema([
                    \Filament\Forms\Components\TextInput::make('name')->required(),
                    \Filament\Forms\Components\TextInput::make('section_order')->numeric()->default(1),
                    \Filament\Forms\Components\Textarea::make('description')->columnSpanFull(),
                    \Filament\Forms\Components\TextInput::make('edit_url')->required(),
                    \Filament\Forms\Components\Toggle::make('is_active')->default(true),
                ]),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->defaultSort('section_order', 'asc')
            ->columns([
                TextColumn::make('section_order')
                    ->label('Section')
                    ->formatStateUsing(fn ($state) => 'Section ' . $state)
                    ->badge()
                    ->color('danger'),
                TextColumn::make('name')
                    ->label('Section Name')
                    ->weight('bold')
                    ->searchable(),
                TextColumn::make('description')
                    ->label('Overview / Features')
                    ->wrap(),
                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),
            ])
            ->recordActions([
                Action::make('edit_section')
                    ->label('Edit Section')
                    ->icon(Heroicon::PencilSquare)
                    ->color('primary')
                    ->button()
                    ->url(fn (CaseStudyPageSection $record) => $record->edit_url),
            ]);
    }
}
