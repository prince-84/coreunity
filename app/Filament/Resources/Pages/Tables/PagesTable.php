<?php

namespace App\Filament\Resources\Pages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('navbar_order', 'asc')
            ->columns([
                TextColumn::make('navbar_order')
                    ->sortable()
                    ->badge()
                    ->color('gray')
                    ->label('#'),
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->label('Page Title'),
                TextColumn::make('slug')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('info')
                    ->formatStateUsing(fn ($state) => '/' . ltrim($state, '/'))
                    ->label('Route / URL'),
                TextColumn::make('hero_headline')
                    ->searchable()
                    ->limit(45)
                    ->label('Banner Headline'),
                IconColumn::make('show_in_navbar')
                    ->boolean()
                    ->label('In Navbar'),
                IconColumn::make('is_published')
                    ->boolean()
                    ->label('Published'),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                \Filament\Tables\Filters\TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
                \Filament\Actions\ReplicateAction::make()
                    ->label('Clone')
                    ->beforeReplicaSaved(function (\Illuminate\Database\Eloquent\Model $replica): void {
                        $replica->slug = $replica->slug . '-copy-' . time();
                        $replica->title = $replica->title . ' (Copy)';
                    }),
                DeleteAction::make(),
                \Filament\Actions\RestoreAction::make(),
                \Filament\Actions\ForceDeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    \Filament\Actions\RestoreBulkAction::make(),
                    \Filament\Actions\ForceDeleteBulkAction::make(),
                ]),
            ]);
    }
}
