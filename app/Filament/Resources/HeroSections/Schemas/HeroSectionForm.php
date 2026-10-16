<?php

namespace App\Filament\Resources\HeroSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class HeroSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Hero Section')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Content')
                            ->icon(Heroicon::DocumentText)
                            ->schema([
                                Section::make('Hero Content')
                                    ->description('The main headline and text for the hero section.')
                                    ->schema([
                                        Textarea::make('title')
                                            ->required()
                                            ->rows(3)
                                            ->columnSpanFull()
                                            ->helperText('You can use HTML tags like <br className="hidden md:block" /> or <br /> to break lines on desktop.'),
                                        TextInput::make('subtitle')
                                            ->columnSpanFull()
                                            ->placeholder('Optional subtitle or secondary tagline'),
                                        Textarea::make('description')
                                            ->rows(3)
                                            ->columnSpanFull()
                                            ->placeholder('Optional description or brief overview'),
                                    ]),

                                Section::make('Call to Action')
                                    ->description('Configure the main button under the headline.')
                                    ->schema([
                                        TextInput::make('button_text')
                                            ->required()
                                            ->default('Schedule a call')
                                            ->label('Button Text'),
                                        TextInput::make('button_link')
                                            ->required()
                                            ->default('#contact')
                                            ->label('Button Link URL (e.g. #contact)'),
                                        FileUpload::make('button_icon')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('hero')
                                            ->label('Button Icon (Optional Avatar)'),
                                    ])->columns(3),
                            ]),

                        Tab::make('Media & Logos')
                            ->icon(Heroicon::Photo)
                            ->schema([
                                Section::make('Images & Visual Elements')
                                    ->description('Earth Globe, Global Presence tags, and client logo ticker.')
                                    ->schema([
                                        FileUpload::make('image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('hero')
                                            ->label('Hero Main / Featured Image (Optional)')
                                            ->columnSpanFull(),

                                        FileUpload::make('globe_image')
                                            ->image()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->imageEditor()
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('hero')
                                            ->label('Earth Globe Image')
                                            ->columnSpanFull(),

                                        Repeater::make('global_presence')
                                            ->label('Global Presence Locations')
                                            ->schema([
                                                TextInput::make('country')
                                                    ->required()
                                                    ->label('Country Name (e.g. USA, UAE)'),
                                            ])
                                            ->collapsible()
                                            ->default([
                                                ['country' => 'USA'],
                                                ['country' => 'UAE'],
                                                ['country' => 'Saudi Arabia'],
                                                ['country' => 'Pakistan'],
                                            ])
                                            ->columnSpanFull(),

                                        FileUpload::make('logo_ticker')
                                            ->image()
                                            ->multiple()
                                            ->reorderable()
                                            ->preserveFilenames()
                                            ->maxSize(2048)
                                            ->disk('public')
                                            ->visibility('public')
                                            ->directory('hero')
                                            ->label('Legacy Logo Ticker Images (Optional)')
                                            ->columnSpanFull(),
                                    ]),

                                Section::make('Hero Media / Press Logos')
                                    ->description('Manage media, press, and client brand logos displayed in the continuous marquee strip below the hero.')
                                    ->schema([
                                        Repeater::make('media_logos')
                                            ->label('Hero Press Logos')
                                            ->schema([
                                                FileUpload::make('image')
                                                    ->label('Logo Image')
                                                    ->image()
                                                    ->preserveFilenames()
                                                    ->maxSize(2048)
                                                    ->imageEditor()
                                                    ->disk('public')
                                                    ->visibility('public')
                                                    ->directory('hero/logos')
                                                    ->nullable(),
                                                TextInput::make('title')
                                                    ->label('Brand Name (e.g. Khaleej Times)')
                                                    ->required(),
                                                TextInput::make('url')
                                                    ->label('Website / Redirect URL')
                                                    ->placeholder('https://www.khaleejtimes.com'),
                                            ])
                                            ->columns(3)
                                            ->reorderableWithDragAndDrop()
                                            ->collapsible()
                                            ->itemLabel(fn (array $state): ?string => $state['title'] ?? ($state['brand_name'] ?? 'Press Logo'))
                                            ->columnSpanFull(),
                                    ]),
                            ]),
                    ]),
            ]);
    }
}
