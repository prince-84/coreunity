<?php

namespace App\Filament\Resources\AboutIndustriesSections\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AboutIndustriesSectionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('main_title')
                    ->label('Main Title')
                    ->searchable(),
                TextColumn::make('badge_text')
                    ->label('Badge')
                    ->limit(35),
                TextColumn::make('items')
                    ->label('Industries Count')
                    ->formatStateUsing(fn ($state) => is_array($state) ? count($state) . ' Industries' : '8 Industries')
                    ->badge()
                    ->color('danger'),
                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),
                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime()
                    ->sortable(),
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }
}
