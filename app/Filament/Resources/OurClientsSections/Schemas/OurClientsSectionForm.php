<?php

namespace App\Filament\Resources\OurClientsSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class OurClientsSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Our Clients Section')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Content')
                            ->icon(Heroicon::DocumentText)
                            ->schema([
                                Section::make('Section Header')
                                    ->description('Top badge, main headline, and visibility toggle.')
                                    ->schema([
                                        TextInput::make('mini_title')
                                            ->label('Badge / Mini Title')
                                            ->default('Our Clients')
                                            ->required(),
                                        Toggle::make('is_active')
                                            ->label('Active / Visible on Home Page')
                                            ->default(true),
                                        Textarea::make('main_title')
                                            ->label('Main Section Headline')
                                            ->default("5-Star Rated, Works\nwith CoreUnity Solutions")
                                            ->rows(2)
                                            ->required()
                                            ->columnSpanFull(),
                                    ])->columns(2),

                                Section::make('Global Reach Card (Globe Slot)')
                                    ->description('The highlight card displayed alongside client logos (e.g., 500+ Clients Worldwide).')
                                    ->schema([
                                        FileUpload::make('globe_image')
                                            ->label('Globe / Feature Icon Image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('clients'),
                                        Textarea::make('globe_text')
                                            ->label('Card Text / Description')
                                            ->default("500+ Clients\nworldwide")
                                            ->rows(2),
                                    ])->columns(2),
                            ]),

                        Tab::make('Client Logos')
                            ->icon(Heroicon::BuildingOffice2)
                            ->schema([
                                Section::make('Background & Textures')
                                    ->description('Optional background pattern grid overlay.')
                                    ->collapsible()
                                    ->schema([
                                        FileUpload::make('bg_image')
                                            ->label('Background Pattern Grid')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('clients'),
                                    ]),

                                Section::make('Client Logos Grid')
                                    ->description('Manage client partner brand logos with drag-and-drop reordering.')
                                    ->schema([
                                        Repeater::make('client_logos')
                                            ->label('Client Partner Logos')
                                            ->schema([
                                                FileUpload::make('image')
                                                    ->label('Logo Image')
                                                    ->image()
                                                    ->preserveFilenames()
                                                    ->maxSize(2048)
                                                    ->imageEditor()
                                                    ->disk('public')
                                                    ->visibility('public')
                                                    ->directory('clients')
                                                    ->nullable(),
                                                TextInput::make('name')
                                                    ->label('Client / Brand Name')
                                                    ->placeholder('e.g. Salwa Real Estate')
                                                    ->required(),
                                                TextInput::make('url')
                                                    ->label('Website / Redirect URL')
                                                    ->placeholder('https://salwa.ae'),
                                            ])
                                            ->columns(3)
                                            ->reorderableWithDragAndDrop()
                                            ->collapsible()
                                            ->itemLabel(fn (array $state): ?string => $state['name'] ?? 'Client Logo')
                                            ->columnSpanFull(),
                                    ]),
                            ]),
                    ]),
            ]);
    }
}
