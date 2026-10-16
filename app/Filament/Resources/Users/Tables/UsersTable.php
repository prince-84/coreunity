<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('id', 'asc')
            ->columns([
                TextColumn::make('id')
                    ->sortable()
                    ->badge()
                    ->color('gray')
                    ->label('#'),

                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->label('Name'),

                TextColumn::make('email')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->icon('heroicon-m-envelope')
                    ->label('Email Address'),

                TextColumn::make('roles.name')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Super Admin' => 'danger',
                        'Editor' => 'warning',
                        default => 'info',
                    })
                    ->label('Roles'),

                TextColumn::make('permissions_count')
                    ->counts('permissions')
                    ->badge()
                    ->color('success')
                    ->label('Direct Permissions'),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make()
                    ->hidden(fn ($record) => $record->id === auth()->id() || $record->hasRole('Super Admin')),
            ])
            ->bulkActions([
                //
            ]);
    }
}
