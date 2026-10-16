<?php

namespace App\Filament\Resources\ContactDetailsSections\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ContactDetailsSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Contact Details Section')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Content')
                            ->icon(Heroicon::DocumentText)
                            ->schema([
                                Section::make('Left Header & Copy')
                                    ->description('Headline with custom highlight word, description paragraph, and active toggle.')
                                    ->schema([
                                        TextInput::make('title_prefix')
                                            ->label('Title Prefix')
                                            ->default('Get')
                                            ->required(),
                                        TextInput::make('title_highlight')
                                            ->label('Highlighted Word (Red)')
                                            ->default('with')
                                            ->required(),
                                        TextInput::make('title_suffix')
                                            ->label('Title Suffix')
                                            ->default('us')
                                            ->required(),
                                        Toggle::make('is_active')
                                            ->label('Active / Visible on Contact Page')
                                            ->default(true),
                                        Textarea::make('description')
                                            ->label('Description Paragraph')
                                            ->default("We'd love to hear from you! Our team is here to provide dedicated support, answer your questions, and help bring your next project to life. Feel free to reach out to us")
                                            ->rows(3)
                                            ->required()
                                            ->columnSpanFull(),
                                    ])->columns(4),

                                Section::make('Right Contact Form Settings')
                                    ->description('Call to action button label for the message submission form.')
                                    ->schema([
                                        TextInput::make('submit_button_text')
                                            ->label('Submit Button Label')
                                            ->default('Submit Message')
                                            ->required(),
                                    ]),
                            ]),

                        Tab::make('Contact Info')
                            ->icon(Heroicon::Phone)
                            ->schema([
                                Section::make('Contact Information Cards')
                                    ->description('Agency direct phone number, email address, and Dubai office location.')
                                    ->schema([
                                        TextInput::make('phone')
                                            ->label('Direct Phone Number')
                                            ->default('+971 50 555 9646')
                                            ->required(),
                                        TextInput::make('email')
                                            ->label('Direct Email Address')
                                            ->default('contact@coreunitysolutions.com')
                                            ->email()
                                            ->required(),
                                        TextInput::make('address')
                                            ->label('Office Address')
                                            ->default('Churchill Tower, Business Bay, Dubai, UAE')
                                            ->required()
                                            ->columnSpanFull(),
                                    ])->columns(2),
                            ]),
                    ]),
            ]);
    }
}
