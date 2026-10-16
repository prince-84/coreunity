<?php

namespace App\Filament\Resources\CrmForms\Tables;

use App\Models\CrmForm;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CrmFormsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('name', 'asc')
            ->recordUrl(fn (CrmForm $record): string => url('/admin/form-submissions?tableFilters[crm_form_id][value]=' . $record->id . '&form_id=' . $record->id))
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->icon('heroicon-m-document-text')
                    ->label('Form Name')
                    ->description(fn (CrmForm $record): ?string => $record->description),

                TextColumn::make('slug')
                    ->badge()
                    ->color('gray')
                    ->searchable()
                    ->label('Slug Identifier'),

                TextColumn::make('submissions_count')
                    ->counts('submissions')
                    ->badge()
                    ->color('primary')
                    ->label('Total Submissions')
                    ->sortable(),

                TextColumn::make('new_submissions_count')
                    ->counts([
                        'submissions as new_submissions_count' => fn ($query) => $query->where('status', 'new'),
                    ])
                    ->badge()
                    ->color(fn (int $state): string => $state > 0 ? 'danger' : 'gray')
                    ->label('New Leads')
                    ->sortable(),

                TextColumn::make('latestSubmission.created_at')
                    ->label('Last Submission')
                    ->dateTime('M d, Y h:i A')
                    ->placeholder('No leads yet')
                    ->sortable(),

                IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('view_submissions')
                    ->label('View Submissions')
                    ->icon('heroicon-m-arrow-right-circle')
                    ->color('success')
                    ->button()
                    ->url(fn (CrmForm $record): string => url('/admin/form-submissions?tableFilters[crm_form_id][value]=' . $record->id . '&form_id=' . $record->id)),

                EditAction::make('edit_config')
                    ->label('Edit Config')
                    ->icon('heroicon-m-cog-6-tooth')
                    ->color('gray')
                    ->modalHeading(fn (CrmForm $record): string => "Form Configuration: {$record->name}")
                    ->modalDescription('Update form display name, system slug, and active status.')
                    ->slideOver(),

                DeleteAction::make(),
            ]);
    }
}
