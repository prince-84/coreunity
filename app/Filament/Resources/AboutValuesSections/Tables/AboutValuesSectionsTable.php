<?php

namespace App\Filament\Resources\AboutValuesSections\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AboutValuesSectionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('headline')
                    ->label('Headline')
                    ->limit(40)
                    ->searchable(),
                TextColumn::make('items')
                    ->label('Accordion Items')
                    ->formatStateUsing(fn ($state) => is_array($state) ? count($state) . ' Items' : '3 Items')
                    ->badge()
                    ->color('info'),
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
