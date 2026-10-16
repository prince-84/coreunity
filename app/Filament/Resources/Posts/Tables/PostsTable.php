<?php

namespace App\Filament\Resources\Posts\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order', 'asc')
            ->columns([
                TextColumn::make('sort_order')
                    ->sortable()
                    ->badge()
                    ->color('gray')
                    ->label('#'),
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->limit(40)
                    ->label('Article Title'),
                TextColumn::make('slug')
                    ->searchable()
                    ->badge()
                    ->color('info')
                    ->formatStateUsing(fn ($state) => '/blogs/' . ltrim($state, '/'))
                    ->label('URL Slug'),
                TextColumn::make('category')
                    ->searchable()
                    ->badge()
                    ->color('danger')
                    ->label('Category'),
                TextColumn::make('author_name')
                    ->label('Author')
                    ->badge()
                    ->color('gray'),
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
            ->actions([
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
            ]);
    }
}
