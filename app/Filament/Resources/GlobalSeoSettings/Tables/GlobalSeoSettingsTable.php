<?php

namespace App\Filament\Resources\GlobalSeoSettings\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class GlobalSeoSettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                IconColumn::make('site_indexing_enabled')
                    ->label('Indexing Status (Robots)')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-no-symbol')
                    ->trueColor('success')
                    ->falseColor('danger'),
                TextColumn::make('meta_title_default')
                    ->label('Default Title')
                    ->limit(45),
                TextColumn::make('canonical_base_url')
                    ->label('Canonical URL')
                    ->limit(35),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->actions([
                EditAction::make(),
            ]);
    }
}
