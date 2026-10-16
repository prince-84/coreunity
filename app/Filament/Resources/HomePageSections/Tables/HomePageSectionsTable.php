<?php

namespace App\Filament\Resources\HomePageSections\Tables;

use App\Models\HomePageSection;
use Filament\Actions\Action;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HomePageSectionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('section_order', 'asc')
            ->columns([
                TextColumn::make('section_order')
                    ->label('Section')
                    ->formatStateUsing(fn ($state) => 'Section ' . $state)
                    ->badge()
                    ->color('warning')
                    ->sortable(),
                TextColumn::make('name')
                    ->label('Section Name')
                    ->weight('bold')
                    ->searchable(),
                TextColumn::make('description')
                    ->label('Included Features & Fields')
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
                    ->url(fn (HomePageSection $record) => $record->edit_url),
            ])
            ->recordUrl(fn (HomePageSection $record) => $record->edit_url);
    }
}
