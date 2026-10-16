<?php

namespace App\Filament\Resources\ServicesListSections\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ServicesListSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Services List Section')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Content')
                            ->icon(Heroicon::DocumentText)
                            ->schema([
                                Section::make('Section Header')
                                    ->description('Section badge, heading, and visibility toggle.')
                                    ->schema([
                                        TextInput::make('mini_title')
                                            ->label('Badge / Mini Title')
                                            ->default('What We Offer')
                                            ->required(),
                                        Toggle::make('is_active')
                                            ->label('Active / Visible on Services Page')
                                            ->default(true),
                                        Textarea::make('main_title')
                                            ->label('Main Section Headline')
                                            ->default("Save time and grow your business\nwith our expert solutions")
                                            ->rows(2)
                                            ->required()
                                            ->columnSpanFull(),
                                    ])->columns(2),

                                Section::make('Section Footer CTA')
                                    ->description('Bottom button leading to full services catalog.')
                                    ->schema([
                                        TextInput::make('button_text')
                                            ->label('Button Text')
                                            ->default('View all services')
                                            ->required(),
                                        TextInput::make('button_url')
                                            ->label('Button URL')
                                            ->default('/services/all')
                                            ->required(),
                                    ])->columns(2),
                            ]),

                        Tab::make('Service Cards')
                            ->icon(Heroicon::ListBullet)
                            ->schema([
                                Section::make('Services List Cards')
                                    ->description('Interactive cards with hover transitions, number index, title, description, and link.')
                                    ->schema([
                                        Repeater::make('services')
                                            ->label('Services Items')
                                            ->schema([
                                                TextInput::make('num')
                                                    ->label('Index Number')
                                                    ->default('01')
                                                    ->required(),
                                                TextInput::make('title')
                                                    ->label('Service Title')
                                                    ->required()
                                                    ->placeholder('e.g. Branding, Digital Marketing'),
                                                TextInput::make('href')
                                                    ->label('Service Link / URL')
                                                    ->required()
                                                    ->placeholder('/services/branding-and-creative-design'),
                                                Textarea::make('desc')
                                                    ->label('Description')
                                                    ->rows(3)
                                                    ->required()
                                                    ->columnSpanFull(),
                                            ])
                                            ->defaultItems(3)
                                            ->columns(3)
                                            ->reorderable()
                                            ->collapsible()
                                            ->itemLabel(fn (array $state): ?string => ($state['num'] ?? '') . ' - ' . ($state['title'] ?? 'New Service'))
                                            ->columnSpanFull(),
                                    ]),
                            ]),
                    ]),
            ]);
    }
}
