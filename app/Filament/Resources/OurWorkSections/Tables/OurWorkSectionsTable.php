<?php

namespace App\Filament\Resources\OurWorkSections\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class OurWorkSectionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('mini_title')
                    ->label('Badge')
                    ->badge()
                    ->color('warning'),
                TextColumn::make('main_title')
                    ->label('Headline')
                    ->weight('bold')
                    ->searchable(),
                TextColumn::make('card_1_title')
                    ->label('Card 1')
                    ->limit(25),
                TextColumn::make('card_2_title')
                    ->label('Card 2')
                    ->limit(25),
                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
