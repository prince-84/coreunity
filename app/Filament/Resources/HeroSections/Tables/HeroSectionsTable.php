<?php

namespace App\Filament\Resources\HeroSections\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HeroSectionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Headline')
                    ->formatStateUsing(fn ($state) => strip_tags((string)$state))
                    ->searchable()
                    ->limit(55)
                    ->tooltip(fn ($record) => strip_tags((string)$record->title)),
                TextColumn::make('subtitle')
                    ->label('Subtitle')
                    ->searchable()
                    ->limit(30)
                    ->toggleable(),
                TextColumn::make('button_text')
                    ->label('Button Text')
                    ->badge()
                    ->color('danger')
                    ->searchable(),
                TextColumn::make('button_link')
                    ->label('Link URL')
                    ->limit(25)
                    ->searchable(),
                ImageColumn::make('button_icon')
                    ->label('Icon')
                    ->circular()
                    ->defaultImageUrl(asset('Core Unity Logo-05.svg')),
                ImageColumn::make('globe_image')
                    ->label('Globe')
                    ->circular()
                    ->defaultImageUrl(asset('earth_globe.png')),
                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime()
                    ->sortable(),
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
