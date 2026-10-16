<?php

namespace App\Filament\Resources\FormSubmissions\Schemas;

use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class FormSubmissionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Form Submission')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Lead Details')
                            ->icon(Heroicon::Identification)
                            ->schema([
                                Section::make('Lead Contact Information')
                                    ->description('Personal contact information provided by the user.')
                                    ->schema([
                                        Grid::make(2)
                                            ->schema([
                                                TextInput::make('name')
                                                    ->label('Contact Name')
                                                    ->readOnly(),

                                                TextInput::make('email')
                                                    ->label('Email Address')
                                                    ->readOnly(),

                                                TextInput::make('formatted_phone')
                                                    ->label('Phone Number (with Country Flag)')
                                                    ->readOnly(),

                                                TextInput::make('form_name')
                                                    ->label('Submitted via Form')
                                                    ->readOnly(),
                                            ]),
                                    ]),

                                Section::make('Inquiry & Project Details')
                                    ->description('Specific topics, preferences, and requirements submitted.')
                                    ->schema([
                                        Grid::make(3)
                                            ->schema([
                                                TextInput::make('specialist')
                                                    ->label('Consultation Topic / Specialist')
                                                    ->placeholder('Not specified')
                                                    ->readOnly(),

                                                TextInput::make('contact_method')
                                                    ->label('Preferred Contact Method')
                                                    ->formatStateUsing(fn (?string $state) => match ($state) {
                                                        'whatsapp' => '💬 WhatsApp Message',
                                                        'email' => '📧 Email Response',
                                                        'call' => '📞 Phone Call',
                                                        default => $state ? ucfirst($state) : 'Not specified',
                                                    })
                                                    ->placeholder('Not specified')
                                                    ->readOnly(),

                                                TextInput::make('service')
                                                    ->label('Target Service / Department')
                                                    ->placeholder('Not specified')
                                                    ->readOnly(),
                                            ]),

                                        Textarea::make('message')
                                            ->label('Client Message / Request')
                                            ->placeholder('No written message provided.')
                                            ->rows(4)
                                            ->readOnly(),

                                        Grid::make(2)
                                            ->schema([
                                                TextInput::make('page_url')
                                                    ->label('Source Page URL')
                                                    ->readOnly(),

                                                TextInput::make('ip_address')
                                                    ->label('Visitor IP Address')
                                                    ->readOnly(),
                                            ]),
                                    ]),
                            ]),

                        Tab::make('Follow-Up')
                            ->icon(Heroicon::ChatBubbleLeftRight)
                            ->schema([
                                Section::make('Lead Status & Follow-Up (CRM Action)')
                                    ->description('Update lead qualification status and log internal notes.')
                                    ->schema([
                                        Select::make('status')
                                            ->label('Lead Status')
                                            ->options([
                                                'new' => '🔴 New / Unhandled',
                                                'contacted' => '🟡 Contacted / In Discussion',
                                                'closed' => '🟢 Closed / Converted / Archived',
                                            ])
                                            ->required(),

                                        Textarea::make('admin_notes')
                                            ->label('Internal CRM Notes')
                                            ->placeholder('Log conversation notes, meeting schedules, budget estimates, next steps...')
                                            ->rows(4),
                                    ]),
                            ]),

                        Tab::make('Raw Payload')
                            ->icon(Heroicon::DocumentText)
                            ->schema([
                                Section::make('Complete Raw Payload')
                                    ->description('All dynamic input fields submitted by this form.')
                                    ->collapsible()
                                    ->collapsed()
                                    ->schema([
                                        KeyValue::make('payload')
                                            ->label('Form Field Submissions')
                                            ->readOnly(),
                                    ]),
                            ]),
                    ]),
            ]);
    }
}
