<?php

namespace App\Filament\Resources\CaseStudies\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CaseStudiesTable
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
                TextColumn::make('client_name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->label('Client'),
                TextColumn::make('project_title')
                    ->searchable()
                    ->sortable()
                    ->label('Project Title'),
                TextColumn::make('slug')
                    ->searchable()
                    ->badge()
                    ->color('info')
                    ->formatStateUsing(fn ($state) => '/case-studies/' . ltrim($state, '/'))
                    ->label('URL Slug'),
                TextColumn::make('category')
                    ->searchable()
                    ->badge()
                    ->color('danger')
                    ->label('Category'),
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
                        $replica->project_title = ($replica->project_title ?? 'Case Study') . ' (Copy)';
                    }),
                DeleteAction::make(),
                \Filament\Actions\RestoreAction::make(),
                \Filament\Actions\ForceDeleteAction::make(),
            ]);
    }
}
