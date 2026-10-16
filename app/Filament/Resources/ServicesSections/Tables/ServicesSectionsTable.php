<?php

namespace App\Filament\Resources\ServicesSections\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ServicesSectionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('mini_title')
                    ->label('Badge')
                    ->badge()
                    ->color('warning')
                    ->searchable(),
                TextColumn::make('main_title')
                    ->label('Headline')
                    ->weight('bold')
                    ->searchable(),
                TextColumn::make('card_1_title')
                    ->label('Card 1')
                    ->limit(20)
                    ->color('gray'),
                TextColumn::make('card_2_title_highlight')
                    ->label('Card 2')
                    ->formatStateUsing(fn ($record) => ($record->card_2_title_highlight ?? '') . ' ' . ($record->card_2_title_main ?? ''))
                    ->color('danger'),
                TextColumn::make('card_3_title')
                    ->label('Card 3')
                    ->limit(20)
                    ->color('gray'),
                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
