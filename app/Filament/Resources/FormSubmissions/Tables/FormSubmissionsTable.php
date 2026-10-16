<?php

namespace App\Filament\Resources\FormSubmissions\Tables;

use App\Filament\Resources\FormSubmissions\Schemas\FormSubmissionForm;
use App\Models\FormSubmission;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class FormSubmissionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->recordAction('manage')
            ->columns([
                TextColumn::make('id')
                    ->sortable()
                    ->badge()
                    ->color('gray')
                    ->label('#'),

                TextColumn::make('created_at')
                    ->dateTime('M d, Y h:i A')
                    ->sortable()
                    ->label('Submitted At'),

                TextColumn::make('form_name')
                    ->badge()
                    ->color('info')
                    ->searchable()
                    ->sortable()
                    ->label('Form Source'),

                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->label('Contact Name'),

                TextColumn::make('email')
                    ->searchable()
                    ->copyable()
                    ->icon('heroicon-m-envelope')
                    ->label('Email'),

                TextColumn::make('formatted_phone')
                    ->searchable(query: fn ($query, $search) => $query->where('phone', 'like', "%{$search}%"))
                    ->copyable(fn (FormSubmission $record) => $record->phone)
                    ->icon('heroicon-m-phone')
                    ->label('Phone Number'),

                TextColumn::make('service_or_topic')
                    ->state(fn (FormSubmission $record): string => $record->specialist ?: ($record->service ?: 'General'))
                    ->badge()
                    ->color('gray')
                    ->label('Topic / Service'),

                TextColumn::make('contact_method')
                    ->badge()
                    ->color('info')
                    ->formatStateUsing(fn (?string $state): string => match ($state) {
                        'whatsapp' => '💬 WhatsApp',
                        'email' => '📧 Email',
                        'call' => '📞 Call',
                        default => $state ? ucfirst($state) : '—',
                    })
                    ->label('Preference'),

                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'new' => 'danger',
                        'contacted' => 'warning',
                        'closed' => 'success',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'new' => 'New Lead',
                        'contacted' => 'Contacted',
                        'closed' => 'Closed',
                        default => ucfirst($state),
                    })
                    ->sortable()
                    ->label('Status'),
            ])
            ->filters([
                SelectFilter::make('crm_form_id')
                    ->relationship('crmForm', 'name')
                    ->default(fn () => request()->query('form_id'))
                    ->label('Filter by Form'),

                SelectFilter::make('status')
                    ->options([
                        'new' => 'New Leads',
                        'contacted' => 'Contacted',
                        'closed' => 'Closed',
                    ])
                    ->label('Filter by Status'),
            ])
            ->actions([
                EditAction::make('manage')
                    ->label('Manage Lead')
                    ->icon('heroicon-m-pencil-square')
                    ->color('primary')
                    ->modalHeading(fn (FormSubmission $record): string => "Lead Details: {$record->name}")
                    ->modalDescription(fn (FormSubmission $record): string => "Submitted via {$record->form_name} on " . $record->created_at->format('M d, Y h:i A'))
                    ->slideOver(),

                Action::make('contact_whatsapp')
                    ->label('WhatsApp')
                    ->icon('heroicon-m-chat-bubble-oval-left')
                    ->color('success')
                    ->visible(fn (FormSubmission $record): bool => !empty($record->phone))
                    ->url(fn (FormSubmission $record): string => 'https://wa.me/' . preg_replace('/[^0-9]/', '', $record->phone) . '?text=' . urlencode("Hi {$record->name}, thank you for contacting CoreUnity regarding your inquiry."))
                    ->openUrlInNewTab(),

                DeleteAction::make(),
            ])
            ->bulkActions([
                //
            ]);
    }
}
